<?php

namespace App\Http\Controllers;
use App\Models\Post;
use App\Models\Photo;
use App\Models\Tag;
use Illuminate\Http\Request;
class TagController extends Controller
{
    public function tag_create(Tag $tag)
   {
       return view('tag/index')->with(['tag' => $tag]);
   }
   
   public function tag_store(Request $request, Tag $tag)
   {
       $input['tag_title'] = $request['tag_title'];
       $tag->fill($input)->save();
       return redirect('/');
   }
   
   public function tag_show(Post $post,Tag $tag, $tag_id)
   {
       
       $user = auth()->user();
       $posts = Post::whereHas('tags', function ($q) use ($tag_id) {
           $q->where('tag_id', $tag_id);
       })->where('user_id', $user->id)->get();
       $cards = $posts->map(function ($post) {
            return new Card($post);
        });
       $tag = Tag::where('id',$tag_id)->first();
       return view('/tag/show')->with(['cards' => $cards, 'tag' => $tag]);
   }
}
