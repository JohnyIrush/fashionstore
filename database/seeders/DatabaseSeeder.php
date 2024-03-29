<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            AttributesTableSeeder::class,
            AttributeValuesTableSeeder::class,
            CategoriesTableSeeder::class,
            CategoryTableSeeder::class,
            ProductTableSeeder::class,
            ProductImageTableSeeder::class,
            ProductCategoryTableSeeder::class,
            AttributeValueProductAttributeTableSeeder::class,
        ]);
    }
}
