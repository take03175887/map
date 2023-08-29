<?php

namespace App\Http\Controllers;
use App\Models\Post;
use App\Models\Photo;
use App\Models\Prefecture;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Arr;
use Illuminate\Http\Request;
use Cloudinary;
use App\Http\Controllers\Card;

class PrefectureController extends Controller
{
    public function serch()
    {
        $prefectureObjects = [];
        //47都道府県の情報をオブジェクトに入れている
        for($i = 1; $i <= 47; $i++){
            $prefectureObject = new PrefectureObject($i);
            $prefectureObjects[$i] = $prefectureObject;
        }
        return view('prefectures/serch')->with(['prefectureObjects' => $prefectureObjects]);
    }
    
    public function index($prefecture_id)
    {
        $user = auth()->user();
        $posts = $user->posts()->where('prefecture_id', $prefecture_id)->get();
        $cards = $posts->map(function ($post) {
            return new Card($post);
        });
        $prefecture = Prefecture::where('id', $prefecture_id)->first();
        return view('prefectures/index')->with(['cards' => $cards, 'prefecture' => $prefecture]);
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
