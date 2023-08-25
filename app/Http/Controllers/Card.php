<?php
namespace App\Http\Controllers;
use App\Models\Post;
use App\Models\Photo;
use App\Models\Tag;

class Card {
    private $id;
    private $prefecture_id;
    private $created_at;
    private $updated_at;
    private $body;
    private $title;
    private $tags;
    private $photos;
    
    public function __construct(Post $post){
        $this->id = $post->id;
        $this->prefecture_id = $post->prefecture_id;
        $this->created_at = $post->created_at;
        $this->updated_at = $post->updated_at;
        $this->body = $post->body;
        $this->title = $post->title;
        $this->tags = $post->tags;
        $this->photos = Photo::where('post_id' ,$post->id)->get();
    }
    
    public function getPhotosImage ($page) {
        return $this->photos->pluck('image_url')[$page];
    }
    
    public function getPhotoId ($page) {
        return $this->photos->pluck('id')[$page];
    }
    
    public function getPageMax() {
        $pageMax = count($this->photos);
        return $pageMax;
    }
    
    public function getId () {
        return $this->id;
    }
    
    public function getPrefecture_id () {
        return $this->prefecture_id;
    }
    
    public function getCreated_at() {
        return $this->created_at;
    }
    
    public function getUpdated_at() {
        return $this->updated_at;
    }
    
    public function getBody () {
        return $this->body;
    }
    
    public function getTitle () {
        return $this->title;
    }
    
    public function getTags () {
        return $this->tags;
    }
}