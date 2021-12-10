<?php

namespace Database\Seeders;

use App\Models\Brand;
use App\Models\Product;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Seeder;


class ProductTableSeeder extends Seeder
{
    use HasFactory;

    #public $faker = Faker\Factory::create();
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Product::truncate();
        $faker = \Faker\Factory::create();
        Product::create(
            [
             'name' => "bra",
             'description' => $faker->paragraph(),
             'sku' => $faker->realText(10),
             'price' => $faker->numberBetween(1000, 20000),
             'sale_price' => $faker->numberBetween(1000, 20000),
             'weight' => $faker->numberBetween(1, 20),
             'quantity' => $faker->numberBetween(1, 20),
             'slug' => $faker->realText(10),
             'featured' =>  $faker->boolean(),
             'user_id' => User::all()->random()->id,
             'brand_id' => Brand::all()->random()->id,
            ]);

        Product::create(
            [
            'name' => "footwear",
            'description' => $faker->paragraph(),
            'sku' => $faker->realText(10),
            'price' => $faker->numberBetween(1000, 20000),
            'sale_price' => $faker->numberBetween(1000, 20000),
            'weight' => $faker->numberBetween(1, 20),
            'quantity' => $faker->numberBetween(1, 20),
            'slug' => $faker->realText(10),
            'featured' =>  $faker->boolean(),
            'user_id' => User::all()->random()->id,
            'brand_id' => Brand::all()->random()->id,
            ] 
        );
   
        Product::create(
            [
            'name' => "Jumper",
            'description' => $faker->paragraph(),
            'sku' => $faker->realText(10),
            'price' => $faker->numberBetween(1000, 20000),
            'sale_price' => $faker->numberBetween(1000, 20000),
            'weight' => $faker->numberBetween(1, 20),
            'quantity' => $faker->numberBetween(1, 20),
            'slug' => $faker->realText(10),
            'featured' =>  $faker->boolean(),
                         'user_id' => User::all()->random()->id,
             'brand_id' => Brand::all()->random()->id,
            ]
       );
   
       Product::create(
           [
            'name' => "high-heels",
            'description' => $faker->paragraph(),
            'sku' => $faker->realText(10),
            'price' => $faker->numberBetween(1000, 20000),
            'sale_price' => $faker->numberBetween(1000, 20000),
            'weight' => $faker->numberBetween(1, 20),
            'quantity' => $faker->numberBetween(1, 20),
            'slug' => $faker->realText(10),
            'featured' =>  $faker->boolean(),
                         'user_id' => User::all()->random()->id,
             'brand_id' => Brand::all()->random()->id,
           ]
       );

       Product::create(
        [
         'name' => "Super sneakers",
         'description' => $faker->paragraph(),
         'sku' => $faker->realText(10),
         'price' => $faker->numberBetween(1000, 20000),
         'sale_price' => $faker->numberBetween(1000, 20000),
         'weight' => $faker->numberBetween(1, 20),
         'quantity' => $faker->numberBetween(1, 20),
         'slug' => $faker->realText(10),
         'featured' =>  $faker->boolean(),
                      'user_id' => User::all()->random()->id,
             'brand_id' => Brand::all()->random()->id,
        ]
    );

    Product::create(
        [
         'name' => "amethyst",
         'description' => $faker->paragraph(),
         'sku' => $faker->realText(10),
         'price' => $faker->numberBetween(1000, 20000),
         'sale_price' => $faker->numberBetween(1000, 20000),
         'weight' => $faker->numberBetween(1, 20),
         'quantity' => $faker->numberBetween(1, 20),
         'slug' => $faker->realText(10),
         'featured' =>  $faker->boolean(),
                      'user_id' => User::all()->random()->id,
             'brand_id' => Brand::all()->random()->id,
        ]
    );

    Product::create(
        [
         'name' => "curb-chain",
         'description' => $faker->paragraph(),
         'sku' => $faker->realText(10),
         'price' => $faker->numberBetween(1000, 20000),
         'sale_price' => $faker->numberBetween(1000, 20000),
         'weight' => $faker->numberBetween(1, 20),
         'quantity' => $faker->numberBetween(1, 20),
         'slug' => $faker->realText(10),
         'featured' =>  $faker->boolean(),
                      'user_id' => User::all()->random()->id,
             'brand_id' => Brand::all()->random()->id,
        ]
    );

    Product::create(
        [
         'name' => "Golden watch",
         'description' => $faker->paragraph(),
         'sku' => $faker->realText(10),
         'price' => $faker->numberBetween(1000, 20000),
         'sale_price' => $faker->numberBetween(1000, 20000),
         'weight' => $faker->numberBetween(1, 20),
         'quantity' => $faker->numberBetween(1, 20),
         'slug' => $faker->realText(10),
         'featured' =>  $faker->boolean(),
                      'user_id' => User::all()->random()->id,
             'brand_id' => Brand::all()->random()->id,
        ]
    );

    Product::create(
        [
         'name' => "Nice speks",
         'description' => $faker->paragraph(),
         'sku' => $faker->realText(10),
         'price' => $faker->numberBetween(1000, 20000),
         'sale_price' => $faker->numberBetween(1000, 20000),
         'weight' => $faker->numberBetween(1, 20),
         'quantity' => $faker->numberBetween(1, 20),
         'slug' => $faker->realText(10),
         'featured' =>  $faker->boolean(),
                      'user_id' => User::all()->random()->id,
             'brand_id' => Brand::all()->random()->id,
        ]
    );

    Product::create(
        [
         'name' => "Nice watch",
         'description' => $faker->paragraph(),
         'sku' => $faker->realText(10),
         'price' => $faker->numberBetween(1000, 20000),
         'sale_price' => $faker->numberBetween(1000, 20000),
         'weight' => $faker->numberBetween(1, 20),
         'quantity' => $faker->numberBetween(1, 20),
         'slug' => $faker->realText(10),
         'featured' =>  $faker->boolean(),
                      'user_id' => User::all()->random()->id,
             'brand_id' => Brand::all()->random()->id,
        ]
    );

    Product::create(
        [
         'name' => "pearls",
         'description' => $faker->paragraph(),
         'sku' => $faker->realText(10),
         'price' => $faker->numberBetween(1000, 20000),
         'sale_price' => $faker->numberBetween(1000, 20000),
         'weight' => $faker->numberBetween(1, 20),
         'quantity' => $faker->numberBetween(1, 20),
         'slug' => $faker->realText(10),
         'featured' =>  $faker->boolean(),
                      'user_id' => User::all()->random()->id,
             'brand_id' => Brand::all()->random()->id,
        ]
    );

    Product::create(
        [
         'name' => "rings",
         'description' => $faker->paragraph(),
         'sku' => $faker->realText(10),
         'price' => $faker->numberBetween(1000, 20000),
         'sale_price' => $faker->numberBetween(1000, 20000),
         'weight' => $faker->numberBetween(1, 20),
         'quantity' => $faker->numberBetween(1, 20),
         'slug' => $faker->realText(10),
         'featured' =>  $faker->boolean(),
                      'user_id' => User::all()->random()->id,
             'brand_id' => Brand::all()->random()->id,
        ]
    );

    Product::create(
        [
         'name' => "silver watch",
         'description' => $faker->paragraph(),
         'sku' => $faker->realText(10),
         'price' => $faker->numberBetween(1000, 20000),
         'sale_price' => $faker->numberBetween(1000, 20000),
         'weight' => $faker->numberBetween(1, 20),
         'quantity' => $faker->numberBetween(1, 20),
         'slug' => $faker->realText(10),
         'featured' =>  $faker->boolean(),
                      'user_id' => User::all()->random()->id,
             'brand_id' => Brand::all()->random()->id,
        ]
    );
    Product::create(
        [
         'name' => "Super neckless",
         'description' => $faker->paragraph(),
         'sku' => $faker->realText(10),
         'price' => $faker->numberBetween(1000, 20000),
         'sale_price' => $faker->numberBetween(1000, 20000),
         'weight' => $faker->numberBetween(1, 20),
         'quantity' => $faker->numberBetween(1, 20),
         'slug' => $faker->realText(10),
         'featured' =>  $faker->boolean(),
                      'user_id' => User::all()->random()->id,
             'brand_id' => Brand::all()->random()->id,
        ]
    );

    Product::create(
        [
         'name' => "briefcase",
         'description' => $faker->paragraph(),
         'sku' => $faker->realText(10),
         'price' => $faker->numberBetween(1000, 20000),
         'sale_price' => $faker->numberBetween(1000, 20000),
         'weight' => $faker->numberBetween(1, 20),
         'quantity' => $faker->numberBetween(1, 20),
         'slug' => $faker->realText(10),
         'featured' =>  $faker->boolean(),
                      'user_id' => User::all()->random()->id,
             'brand_id' => Brand::all()->random()->id,
        ]
    );

    Product::create(
        [
         'name' => "Fashion handbag",
         'description' => $faker->paragraph(),
         'sku' => $faker->realText(10),
         'price' => $faker->numberBetween(1000, 20000),
         'sale_price' => $faker->numberBetween(1000, 20000),
         'weight' => $faker->numberBetween(1, 20),
         'quantity' => $faker->numberBetween(1, 20),
         'slug' => $faker->realText(10),
         'featured' =>  $faker->boolean(),
                      'user_id' => User::all()->random()->id,
             'brand_id' => Brand::all()->random()->id,
        ]
    );

    Product::create(
        [
         'name' => "handbag",
         'description' => $faker->paragraph(),
         'sku' => $faker->realText(10),
         'price' => $faker->numberBetween(1000, 20000),
         'sale_price' => $faker->numberBetween(1000, 20000),
         'weight' => $faker->numberBetween(1, 20),
         'quantity' => $faker->numberBetween(1, 20),
         'slug' => $faker->realText(10),
         'featured' =>  $faker->boolean(),
                      'user_id' => User::all()->random()->id,
             'brand_id' => Brand::all()->random()->id,
        ]
    );

    Product::create(
        [
         'name' => "Women-Wallets",
         'description' => $faker->paragraph(),
         'sku' => $faker->realText(10),
         'price' => $faker->numberBetween(1000, 20000),
         'sale_price' => $faker->numberBetween(1000, 20000),
         'weight' => $faker->numberBetween(1, 20),
         'quantity' => $faker->numberBetween(1, 20),
         'slug' => $faker->realText(10),
         'featured' =>  $faker->boolean(),
                      'user_id' => User::all()->random()->id,
             'brand_id' => Brand::all()->random()->id,
        ]
    );

    Product::create(
        [
         'name' => "money",
         'description' => $faker->paragraph(),
         'sku' => $faker->realText(10),
         'price' => $faker->numberBetween(1000, 20000),
         'sale_price' => $faker->numberBetween(1000, 20000),
         'weight' => $faker->numberBetween(1, 20),
         'quantity' => $faker->numberBetween(1, 20),
         'slug' => $faker->realText(10),
         'featured' =>  $faker->boolean(),
                      'user_id' => User::all()->random()->id,
             'brand_id' => Brand::all()->random()->id,
        ]
    );

    Product::create(
        [
         'name' => "Nice Dress",
         'description' => $faker->paragraph(),
         'sku' => $faker->realText(10),
         'price' => $faker->numberBetween(1000, 20000),
         'sale_price' => $faker->numberBetween(1000, 20000),
         'weight' => $faker->numberBetween(1, 20),
         'quantity' => $faker->numberBetween(1, 20),
         'slug' => $faker->realText(10),
         'featured' =>  $faker->boolean(),
                      'user_id' => User::all()->random()->id,
             'brand_id' => Brand::all()->random()->id,
        ]
    );
    }
}
