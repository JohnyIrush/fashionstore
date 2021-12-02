<?php

namespace Database\Factories;

use App\Models\Category;
use Illuminate\Database\Eloquent\Factories\Factory;

class CategoryFactory extends Factory
{

    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Category::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
            return [
                'name'          =>  $this->faker->realText(10),
                'description'   =>  $this->faker->text(),
                'slug'          =>  $this->faker->realText(10),
                'parent_id'     =>  1,
                'menu'          =>  1,
            ];
    }


}
