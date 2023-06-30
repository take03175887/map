<?php

class Prefectures
{
    protected $latest_post_id;
    protected $count = array();
    protected $photos;
    protected $photo_page = array();
    protected $d = 0;
    
    public function get_count() {
        for($i = 1; $i <= $this->latest_post_id; $i++){
                $count[$i] = 0;
        }
            
        foreach($this->photos as $photo){
            for($i = 1; $i <= $this->latest_post_id; $i++){
                 if($photo->post_id == $i){
                    $count[$i] = $count[$i] + 1;
                }
            }
        }
        return $count;
    }
    
    public function get_photo_page(array $count){
        while($d < count($photos)){
            for($i = 1; $i <= $this->latest_post_id; $i++){
                for($p = 1; $p <= $count[$i]; $p++){
                    $photo_page[$i][$p] = $photos[$d];
                    $d = $d + 1;
                }
            }
        }
        return $photo_page;
    }
}