<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PostTag extends Model
{
    use HasFactory;
    public function Posts(){
        return $this->hasMany(Post::class);
    }
    public function Tags(){
        return $this->hasMany(Tags::class);
    }
}
