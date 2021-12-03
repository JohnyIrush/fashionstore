<?php

namespace Database\Factories;

use App\Models\Product;
use App\Models\ProductAttributes;
use Illuminate\Database\Eloquent\Factories\Factory;

class ProductAttributesFactory extends Factory
{
    protected $model = ProductAttributes::class;
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'quantity' => $this->faker->numberBetween(1, 20),
            'product_id' => function() {
                return Product::all()->random();
            },
        ];
    }
}
