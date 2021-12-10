<?php

namespace Database\Seeders;

use App\Models\ProductCategory;
use Illuminate\Database\Seeder;

class ProductCategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        ProductCategory::truncate();

        ProductCategory::create(
            [
                'product_id' => 1,
                'category_id' => 2
            ]);

        ProductCategory::create(
            [
                'product_id' => 2,
                'category_id' => 2
            ]);

        ProductCategory::create(
            [
                'product_id' => 3,
                'category_id' => 2
            ]);
        
        ProductCategory::create(
            [
                'product_id' => 4,
                'category_id' => 2
            ]);

        ProductCategory::create(
            [
                'product_id' => 5,
                'category_id' => 2
            ]);

        ProductCategory::create(
            [
                'product_id' => 6,
                'category_id' => 1
            ]);

        ProductCategory::create(
            [
                'product_id' => 7,
                'category_id' => 1
            ]);


        ProductCategory::create(
            [
                'product_id' => 8,
                'category_id' => 1
        ]);

        ProductCategory::create(
            [
                'product_id' => 9,
                'category_id' => 1
        ]);

        ProductCategory::create(
            [
                'product_id' => 10,
                'category_id' => 1
        ]);

        ProductCategory::create(
            [
                'product_id' => 11,
                'category_id' => 1
        ]);

        ProductCategory::create(
            [
                'product_id' => 12,
                'category_id' => 1
        ]);

        ProductCategory::create(
            [
                'product_id' => 13,
                'category_id' => 1
        ]);

        ProductCategory::create(
            [
                'product_id' => 14,
                'category_id' => 1
        ]);

        ProductCategory::create(
            [
                'product_id' => 15,
                'category_id' => 3
        ]);
    
        ProductCategory::create(
            [
                'product_id' => 16,
                'category_id' => 3
        ]);

        ProductCategory::create(
            [
                'product_id' => 17,
                'category_id' => 3
        ]);
    
        ProductCategory::create(
            [
                'product_id' => 18,
                'category_id' => 3
        ]);
    

        ProductCategory::create(
            [
                'product_id' => 19,
                'category_id' => 3
        ]);

        ProductCategory::create(
            [
                'product_id' => 20,
                'category_id' => 2
        ]);
    
    
    
}

}
