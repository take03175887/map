<?php
namespace App\Http\Controllers;
use App\Models\Post;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use Auth;

class PrefectureObject {
    private $name;
    private $countPosts;
    
    public function __construct($prefectureId){
        $this->name = DB::table('prefectures')->where('id', $prefectureId)->value('name');
        $user = Auth::user();
        $userPosts = $user->posts->where('prefecture_id', $prefectureId);
        $this->countPosts = count($userPosts);
    }
    
    public function getName() {
        return $this->name;
    }
    
    public function getCountPosts() {
        return $this->countPosts;
    }
}