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
    public function index(Post $posts,Prefecture $prefectures)
   {
       $count = array();
       for($i = 1; $i <= 47; $i++){
           $count[0][$i]=0;
       }
       
       foreach($posts->get() as $post) {
           for($i = 1; $i <= 47; $i++){
               if($post->prefecture_id==$i){
                   $count[0][$i]=$count[0][$i]+1;
               }
           }
       }
	             
        foreach($prefectures->get() as $prefecture){
            $count[1][$prefecture->id] = $prefecture->name;
        }
	                
       return view('post/index')->with(['count' => $count ]+(['prefecture' => $prefecture]));
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
       
       $images = $request->file('image');
       foreach($images as $image)
       {
           $input = array('post_id' => Post::latest()->first()->id);
           $image_url = Cloudinary::upload($image->getRealPath())->getSecurePath();
           $input += ['image_url' => $image_url];
           $photo = New Photo;
           $photo->fill($input)->save();
       }
       return redirect('/');
   }
}
