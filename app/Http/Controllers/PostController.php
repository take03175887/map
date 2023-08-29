<?php

namespace App\Http\Controllers;
use App\Models\Post;
use App\Models\Photo;
use App\Models\Tag;
use App\Http\Controllers\Card;
use App\Models\Prefecture;
use App\Http\Controllers\PrefectureObject;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Cloudinary;
use App\Http\Requests\CreateRequest;
use App\Http\Requests\EditRequest;
use Illuminate\Support\Facades\DB;

class PostController extends Controller
{
    public function index(Request $request)
    {
        $user = auth()->user();
        $userName = $user->name;
        $posts = $user->posts()->with('user');
        
        $keyword = $request->input('keyword');
        if(!empty($keyword)) {
            $posts->where('title', 'LIKE', "%{$keyword}%");
        }
        
        $posts = $posts->paginate(6);
        
        $cards = $posts->map(function ($post) {
            return new Card($post);
        });
        
        return view('post/index')->with(['cards' => $cards, 'userName' => $userName, 'posts' => $posts]);
    }
    
    public function show($card_id, $page = 0)
    {
        $post = Post::find($card_id);
        $card = new Card($post);
        
        return view('post/show', compact('card', 'page'));
    }
    
    public function up(Request $request, $card_id)
    {
        return $this->show($card_id, $request->input('page', 0) + 1);
    }
    
    public function down(Request $request, $card_id)
    {
        return $this->show($card_id, $request->input('page', 0) - 1);
    }
    
    public function create(Tag $tags)
    {
       $user = auth()->user();
       $tags = $user->tags;
       return view('post/create')->with(['tags' => $tags]);
    }
   
    public function store(CreateRequest $request, Post $post, Photo $photo)
    {
       $input = $request['post'];
       $input['user_id'] = Auth::id();
       $input['prefecture_id']= $request['prefecture_id'];
       $post->fill($input)->save();
       
       $input_tags = $request->tags_array;
       $post->tags()->attach($input_tags);
       
       $images = $request->file('image');
       foreach($images as $image)
        {
            $input = array('post_id' => $post->id);
            $image_url = Cloudinary::upload($image->getRealPath())->getSecurePath();
            $input += ['image_url' => $image_url];
            $photo = New Photo;
            $photo->fill($input)->save();
        }
       return redirect()->route('create')->with('message','投稿が完了しました！');
    }
   
    public function deleteCard($cardId)
    {
        DB::table('post_tag')->where('post_id', $cardId)->delete();
        Photo::where('post_id',$cardId)->delete();
        Post::where('id',$cardId)->delete();
        return redirect()->route('index')->with('message','投稿を削除しました');
    }
   
    public function edit(Post $post)
    {
        $card = new Card($post);
        return view('post/edit')->with(['card' => $card]);
    }
   
    public function update(EditRequest $request, Post $post)
    {
        $input = $request['post'];
        $post->fill($input)->save();
        $images = $request->file('image');
        if($images){
            foreach($images as $image)
            {
                $input = array('post_id' => $post->id);
                $image_url = Cloudinary::upload($image->getRealPath())->getSecurePath();
                $input += ['image_url' => $image_url];
                $photo = New Photo;
                $photo->fill($input)->save();
            }
        }
        return redirect()->route('edit', ['post' => $post->id])->with('message', '投稿が更新されました！');

    }
   
    public function photoDelete(Photo $photo){
        $cardId = $photo->post_id; // post_id プロパティを直接アクセス
        $photo->delete();
        return redirect()->route('show', ['cardId' => $cardId]);
    }
   
}
