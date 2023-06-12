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
    public function prefecture(Request $request,Prefecture $prefecture, Photo $photo)
    {
        $prefecture->id=$request->prefecture_id;
        return view('prefectures.index')->with(['posts' => $prefecture -> getPostByPrefecture()]+['photos' => $photo ->get()]);
    }
    
    public function show(Post $post, Photo $photo)
    {
        return view('prefectures.show')->with(['post' => $post, 'photo' => $photo]);
    }
}
