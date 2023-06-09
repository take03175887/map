<?php

namespace App\Http\Controllers;
use App\Models\Post;
use App\Models\Photo;
use App\Models\Prefecture;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Cloudinary;

class PostController extends Controller
{
    public function index(Post $post)
   {
       return view('post/index')->with(['post' => $post ->get()]);
   }
   
   public function prefecture(Request $request,Post $post, Photo $photo)
   {
       $post->prefecture_id=$request->prefecture_id;
       return view('post/prefecture')->with(['post' => $post ->get()]+['photo' => $photo->get()]);
   }
   
   public function create(Post $post)
   {
       return view('post/create')->with(['post' => $post]);
   }
   
   public function store(Request $request, Post $post, Photo $photo)
   {
       $input = $request['post'];
       $input['user_id'] = Auth::id();
       $input['prefecture_id']= $request['prefecture_id'];
       $post->fill($input)->save();
       
       $input = array('post_id' => Post::latest()->first()->id);
       $image_url = Cloudinary::upload($request->file('image')->getRealPath())->getSecurePath();
       
       $input += ['image_url' => $image_url];
       $photo->fill($input)->save();
       return view('post/index')->with(['post' => $post ->get()]);
   }
}
