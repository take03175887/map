<?php

namespace App\Http\Controllers;
use App\Models\Post;
use App\Models\Photo;
use App\Models\Prefecture;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Cloudinary;

class PrefectureController extends Controller
{
    public function prefecture(Request $request,Prefecture $post, Photo $photo)
    {
        $post->id=$request->prefecture_id;
        return view('prefectures.index')->with(['post' => $post -> getByPrefecture()->get()]+['photo' => $photo ->get()]);
    }
    
    public function show(Post $post, Photo $photo)
    {
        return view('prefectures.show')->with(['po' => $post, 'pho' => $photo]);
    }
}
