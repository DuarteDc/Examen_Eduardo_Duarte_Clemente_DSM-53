<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
        public function User(){
        return $this->belongsTo(User::class);
        }
        public function Category(){
            return $this->belongsTo(Category::class);
        }
        public function Post_tag(){
            return $this->belongsTo(PostTag::class);
        }
}
