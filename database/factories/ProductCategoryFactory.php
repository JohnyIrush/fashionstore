<?php

namespace Database\Factories;

use App\Models\Category;
use App\Models\Product;
use App\Models\ProductCategory;
use Illuminate\Database\Eloquent\Factories\Factory;

class ProductCategoryFactory extends Factory
{
    protected $model = ProductCategory::class;
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        ProductCategory::truncate();
        return [
            'product_id' => function() {
                return Product::all()->random();
            },
            'category_id' => function() {
                return Category::all()->random();
            }
        ];
    }
}
