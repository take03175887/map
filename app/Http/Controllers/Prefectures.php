<?php

class Prefectures
{
    protected $latest_post_id;
    protected $counts = array();
    
    protected $photos = array();
    protected $photo_page = array();
    protected $d = 0;
    
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
        return $photo_page;
    }
}