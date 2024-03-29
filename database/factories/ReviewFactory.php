<?php

namespace Database\Factories;

use App\Models\Review;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class ReviewFactory extends Factory
{
    protected $model = Review::class;
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'review' => $this->faker->paragraph(),
            'rating' => $this->faker->numberBetween(0, 5),
            'product_id' => function() {
                return User::all()->random();
            },
            'user_id' => function() {
                return User::all()->random();
            },
        ];
    }
}
