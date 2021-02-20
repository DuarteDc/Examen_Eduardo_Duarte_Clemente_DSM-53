<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->id();
            $table->string('title',45);
            $table->string('slug',45);
            $table->string('description',45);
            $table->string('image',45);
            $table->unsignedBigInteger('id_tag');
            $table->unsignedBigInteger('id_user');
            $table->unsignedBigInteger('category_id');
            $table->string('extract',45);
            $table->foreign('id_user')->references('id')->on('users');
            $table->foreign('category_id')->references('id')->on('categories');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('posts');
    }
}