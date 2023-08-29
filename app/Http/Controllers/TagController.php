<?php

namespace App\Http\Controllers;
use App\Models\Post;
use App\Models\Photo;
use App\Models\Tag;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
class TagController extends Controller
{
    public function tag_create()
   {
       $user = auth()->user();
       $tags = $user->tags()->with('user')->get();
       return view('tag/create')->with(['tags' =>$tags]);
   }
   
   public function tag_store(Request $request, Tag $tag)
   {
       $input['tag_title'] = $request['tag_title'];
       $input['user_id'] = Auth::id();
       $tag->fill($input)->save();
       $user = auth()->user();
       $tags = $user->tags()->with('user')->get();
       return redirect()->route('tag_create')->with(['tags' =>$tags]);
   }
   
   public function index(Post $post,Tag $tag, $tag_id)
   {
       
       $user = auth()->user();
       $posts = Post::whereHas('tags', function ($q) use ($tag_id) {
           $q->where('tag_id', $tag_id);
       })->where('user_id', $user->id)->get();
       $cards = $posts->map(function ($post) {
            return new Card($post);
        });
       $tag = Tag::where('id',$tag_id)->first();
       return view('/tag/index')->with(['cards' => $cards, 'tag' => $tag]);
   }
}
