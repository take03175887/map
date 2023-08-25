<?php

namespace App\Http\Controllers;
use App\Models\Post;
use App\Models\Photo;
use App\Models\Tag;
use App\Models\Prefecture;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Arr;
use Illuminate\Http\Request;
use Cloudinary;
use App\Http\Controllers\Card;
use Illuminate\Support\Facades\DB;

class PrefectureController extends Controller
{
    
    public function prefecture($prefecture_id)
    {
        $user = auth()->user();
        $posts = $user->posts->where('prefecture_id', $prefecture_id);
        $cards = $posts->map(function ($post) {
            return new Card($post);
        });
        $prefecture = Prefecture::where('id', $prefecture_id)->first();
        return view('prefectures/index')->with(['cards' => $cards, 'prefecture' => $prefecture]);
    }
    /*
    public function show($card_id)
    {
        $page = 0;
        $post = Post::find($card_id);
        $card = new Card($post);
        return view('prefectures/show')->with(['card' => $card , 'page' => $page]);
    }
    
    public function up(Request $request,$card_id)
    {
        $page = $request['page'] + 1;
        $post = Post::find($card_id);
        $card = new Card($post);
        return view('prefectures/show')->with(['card' => $card , 'page' => $page]);
    }
    
    public function down(Request $request,$card_id)
    {
        $page = $request['page'] - 1;
        $post = Post::find($card_id);
        $card = new Card($post);
        return view('prefectures/show')->with(['card' => $card , 'page' => $page]);
    }*/
    
    public function show($card_id, $page = 0)
    {
        $post = Post::find($card_id);
        $card = new Card($post);
        
        return view('prefectures/show', compact('card', 'page'));
    }
    
    public function up(Request $request, $card_id)
    {
        return $this->show($card_id, $request->input('page', 0) + 1);
    }
    
    public function down(Request $request, $card_id)
    {
        return $this->show($card_id, $request->input('page', 0) - 1);
    }
    
    public function delete(Photo $photo){
        $photo->delete();
        return redirect('/');
    }
    
    public function delete_card($card_id)
    {
        DB::table('post_tag')->where('post_id', $card_id)->delete();
        Photo::where('post_id',$card_id)->delete();
        Post::where('id',$card_id)->delete();
        return redirect('/');
    }
    
    public function store(Request $request, Photo $photo)
   {
       $images = $request->file('image');
       foreach($images as $image)
       {
           $input = array('post_id' => $request['post']);
           $image_url = Cloudinary::upload($image->getRealPath())->getSecurePath();
           $input += ['image_url' => $image_url];
           $photo = New Photo;
           $photo->fill($input)->save();
       }
       return redirect('/');
   }
}
