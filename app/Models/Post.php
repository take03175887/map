<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Post extends Model
{
    use HasFactory;
    
    
    protected $fillable = [
        'title',
        'body',
        'user_id',
        'prefecture_id'
        ];
    
    public function user() {
        return $this->belongsTo(User::class);
    }
    
    public function prefecture()
    {
        return $this->belongsTo(Prefecture::class);
    }
    
    public function photo()
    {
        return $this->hasMany(Photo::class);
    }
    
    public function tags()
    {
        return $this->belongsToMany(Tag::class);
    }
}
