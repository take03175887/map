<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    
    protected $table = 'post';
    
    protected $fillable = [
        'title',
        'body',
        'user_id',
        'prefecture_id'
        ];
    
    public function prefecture()
    {
        return $this->belongsTo(Prefecture::class);
    }
    
    public function photo()
    {
        return $this->hasMany(Photo::class);
    }
}
