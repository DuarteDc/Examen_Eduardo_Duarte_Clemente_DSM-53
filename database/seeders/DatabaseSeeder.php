<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Category;
use App\Models\User;
use App\Models\Imagen;
use App\Models\Post;
use App\Models\PostTag;
use App\Models\Tag;
use PhpParser\Node\Expr\PostDec;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        Category::factory(50)->create();
        User::factory(50)->create();
        Imagen::factory(50)->create();
        Post::factory(50)->create();
        Tag::factory(50)->create();
        PostTag::factory(50)->create();
       
    }
}
