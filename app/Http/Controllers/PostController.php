<?php

namespace App\Http\Controllers;
use App\Models\Post;
use App\Models\Photo;
use App\Models\Tag;
use App\Models\Prefecture;
use App\Http\Controllers\PrefectureObject;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Cloudinary;
use App\Http\Requests\PostRequest;
use App\Http\Requests\PhotoRequest;

class PostController extends Controller
{
    public function index()
   {
        $prefectureObjects = [];
        //47都道府県の情報をオブジェクトに入れている
        for($i = 1; $i <= 47; $i++){
            $prefectureObject = new PrefectureObject($i);
            $prefectureObjects[$i] = $prefectureObject;
        }
       return view('post/index')->with(['prefectureObjects' => $prefectureObjects]);
   }
   /*createの(Post $post)とwithぶんいらなくね？*/
   
   public function create(Post $post, Tag $tag)
   {
       $tag = Tag::all();
       return view('post/create')->with(['post' => $post ,'tags' => $tag]);
   }
   
   public function store(PostRequest $request,PhotoRequest $photoRequest, Post $post, Photo $photo)
   {
       $input = $request['post'];
       $input['user_id'] = Auth::id();
       $input['prefecture_id']= $request['prefecture_id'];
       $post->fill($input)->save();
       
       $input_tags = $request->tags_array;
       $post->tags()->attach($input_tags);
       
       $images = $photoRequest->file('image');
       foreach($images as $image)
       {
           $input = array('post_id' => Post::latest()->first()->id);
           $image_url = Cloudinary::upload($image->getRealPath())->getSecurePath();
           $input += ['image_url' => $image_url];
           $photo = New Photo;
           $photo->fill($input)->save();
       }
       return redirect()->route('create')->with('message','投稿が完了しました！');
   }
   
   public function edit(Post $post)
   {
       return view('post/edit')->with(['post' => $post]);
   }
   
   public function update(PostRequest $request, Post $post)
   {
       $input = $request['post'];
       $post->fill($input)->save();
       
       return redirect('/');
   }
   
}
