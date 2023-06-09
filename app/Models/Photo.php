<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Photo extends Model
{
    use HasFactory;
    
    protected $table = 'photo';
    
    protected $fillable = [
        'image_url',
        'post_id'
        ];
        
    public function post()
    {
        return $this->belongsTo(Post::class);
    }
}
