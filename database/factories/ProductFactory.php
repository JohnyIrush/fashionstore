<?php

namespace Database\Factories;

use App\Models\Product;
use App\Models\Brand;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class ProductFactory extends Factory
{
    protected $model = Product::class;
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        Product::truncate();

        return [
            'name' => $this->faker->word(),
            'description' => $this->faker->paragraph(),
            'sku' => $this->faker->realText(10),
            'price' => $this->faker->numberBetween(1000, 20000),
            'sale_price' => $this->faker->numberBetween(1000, 20000),
            'weight' => $this->faker->numberBetween(1, 20),
            'quantity' => $this->faker->numberBetween(1, 20),
            'slug' => $this->faker->realText(10),
            'featured' =>  $this->faker->boolean(),
            'user_id' => function() {
                return User::all()->random();
            },
            'brand_id' => function() {
                return Brand::all()->random();
            },
        ];

    }
}
