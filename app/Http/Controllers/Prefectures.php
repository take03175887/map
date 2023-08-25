<?php

class Prefectures
{
    //プロパティ
    public $latest_post_id;
    public $counts;
    public $photos;
    public $photo_page;
    public $d;
    
    //コンストラクタ
    public function __construct($latest_post_id)
    {
        $this->latest_post_id = $latest_post_id;
        $this->counts = array();
        $this->photos = array();
        $this->photo_page = array();
        $this->d = 0;
    }
    
    public function get_count() {
        for($i = 1; $i <= $this->latest_post_id; $i++){
                $this->counts[$i] = 0;
        }
            
        foreach($this->photos as $photo){
            for($i = 1; $i <= $this->latest_post_id; $i++){
                 if($photo->post_id == $i){
                    $this->counts[$i] = $count[$i] + 1;
                }
            }
        }
    }
    
    public function get_photo_page(array $counts){
        while($d < count($photos)){
            for($i = 1; $i <= $this->latest_post_id; $i++){
                for($p = 1; $p <= $count[$i]; $p++){
                    $photo_page[$i][$p] = $photos[$d];
                    $d = $d + 1;
                }
            }
        }
    }
}