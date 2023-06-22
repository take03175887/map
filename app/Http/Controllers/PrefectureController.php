<?php

namespace App\Http\Controllers;
use App\Models\Post;
use App\Models\Photo;
use App\Models\Prefecture;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Arr;
use Illuminate\Http\Request;
use Cloudinary;

class PrefectureController extends Controller
{
    public function get_count(Photo $photos) {
        $latest_post_id = Post::latest()->first()->id;
        $count = array();
            
        for($i = 1; $i <= $latest_post_id; $i++){
                $count[$i] = 0;
        }
            
        foreach($photos->get() as $photo){
            for($i = 1; $i <= $latest_post_id; $i++){
                 if($photo->post_id == $i){
                    $count[$i] = $count[$i] + 1;
                }
            }
        }
        return $count;
    }
    
    public function get_photo_page(array $count){
        $latest_post_id = Post::latest()->first()->id;
        $photo_page = array();
        $photos = Photo::orderBy('post_id','desc') ->get();
        $d = 0;
            
        while($d < count($photos)){
            for($i = 1; $i <= $latest_post_id; $i++){
                for($p = 1; $p <= $count[$i]; $p++){
                    $photo_page[$i][$p] = $photos[$d];
                    $d = $d + 1;
                }
            }
        }
        return $photo_page;
    }
    
    public function prefecture(Request $request,Prefecture $prefecture,Photo $photos)
    {
        $prefecture->id=$request->prefecture_id;
        $count = $this->get_count($photos);
        $photo_page = $this->get_photo_page($count);
        return view('prefectures.index')->with(['posts' => $prefecture -> getPostByPrefecture()]+['photo_page' => $photo_page]+['count' => $count]);
    }
    
    public function show(Request $request,Prefecture $prefecture,Post $post,Photo $photos)
    {
        $p=1;
        $prefecture->id=$request->prefecture_id;
        $count = $this->get_count($photos);
        $photo_page = $this->get_photo_page($count);
        return view('prefectures.show')->with(['post' => $post]+['photo_page' => $photo_page]+['count' => $count]+['p' => $p]);
    }
    
    public function up(Request $request,Prefecture $prefecture,Post $post,Photo $photos)
    {
        $p=$request['p']+1;
        $prefecture->id=$request->prefecture_id;
        $count = $this->get_count($photos);
        $photo_page = $this->get_photo_page($count);
        return view('prefectures.show')->with(['post' => $post]+['photo_page' => $photo_page]+['count' => $count]+['p' => $p]);
    }
    
    public function down(Request $request,Prefecture $prefecture,Post $post,Photo $photos)
    {
        $p=$request['p']-1;
        $prefecture->id=$request->prefecture_id;
        $count = $this->get_count($photos);
        $photo_page = $this->get_photo_page($count);
        return view('prefectures.show')->with(['post' => $post]+['photo_page' => $photo_page]+['count' => $count]+['p' => $p]);
    }
}
