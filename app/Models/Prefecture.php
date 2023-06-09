<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Prefecture extends Model
{
    use HasFactory;
    
    protected $table = 'prefecture';
    
    public function posts()
    {
        return $this->hasMany(Post::class);
    }
    
    public function getByPrefecture()
    {
        return $this->posts()->with('prefecture');
    }
}
