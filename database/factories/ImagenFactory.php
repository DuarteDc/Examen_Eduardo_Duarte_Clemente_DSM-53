<?php

namespace Database\Factories;

use App\Models\Imagen;
use Faker\Provider\ar_JO\Text;
use Illuminate\Database\Eloquent\Factories\Factory;

class ImagenFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Imagen::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'url'=>$this->faker->text(45),
            'imageable_id'=>random_int(1,50),
            'imageable'=>$this->faker->text(20)
        ];
    }
}
