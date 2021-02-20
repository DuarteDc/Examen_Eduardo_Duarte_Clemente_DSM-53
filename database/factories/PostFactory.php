<?php

namespace Database\Factories;

use App\Models\Post;
use Illuminate\Database\Eloquent\Factories\Factory;

class PostFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Post::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title'=>$this->faker->text(10),
            'slug'=>$this->faker->text(10),
            'description'=>$this->faker->text(10),
            'image'=>$this->faker->text(45),
            'id_tag'=>random_int(1,50),
            'id_user'=>random_int(1,50),
            'category_id'=>random_int(1,50),
            'extract'=>$this->faker->text(10),

        ];
    }
}
