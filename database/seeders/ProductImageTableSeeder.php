<?php

namespace Database\Seeders;

use App\Models\ProductImage;
use Illuminate\Database\Seeder;

class ProductImageTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        ProductImage::truncate();

        ProductImage::create(
            [
                'product_id' => 1,
                'thumbnail' => "bra-ge2a5a5655_640.jpg",
                'full' => "",
            ]
        );

        ProductImage::create(
            [
                'product_id' => 2,
                'thumbnail' => "footwear-g7aece9022_640.jpg",
                'full' => "",
            ]
        );

        ProductImage::create(
            [
                'product_id' => 3,
                'thumbnail' => "jumper.jpg",
                'full' => "",
            ]
        );

        ProductImage::create(
            [
                'product_id' => 4,
                'thumbnail' => "industry-gb1f2dccf7_640.jpg",
                'full' => "",
            ]
        );

        ProductImage::create(
            [
                'product_id' => 5,
                'thumbnail' => "Super sneakers.jpg",
                'full' => "",
            ]
        );

        ProductImage::create(
            [
                'product_id' => 6,
                'thumbnail' => "amethyst-g3db5fcf9f_640.jpg",
                'full' => "",
            ]
        );

        ProductImage::create(
            [
                'product_id' => 7,
                'thumbnail' => "curb-chain-g775c4d86d_640.jpg",
                'full' => "",
            ]
        );

        ProductImage::create(
            [
                'product_id' => 8,
                'thumbnail' => "Golden watch.png",
                'full' => "",
            ]
        );



        ProductImage::create(
            [
                'product_id' => 9,
                'thumbnail' => "Nice speks.png",
                'full' => "",
            ]
        );

        ProductImage::create(
            [
                'product_id' => 10,
                'thumbnail' => "Nice watch.png",
                'full' => "",
            ]
        );


        ProductImage::create(
            [
                'product_id' => 11,
                'thumbnail' => "pearls-g4a254efc9_640.jpg",
                'full' => "",
            ]
        );

        ProductImage::create(
            [
                'product_id' => 12,
                'thumbnail' => "rings-g7ab512342_640.png",
                'full' => "",
            ]
        );

        ProductImage::create(
            [
                'product_id' => 13,
                'thumbnail' => "silver watch.png",
                'full' => "",
            ]
        );

        ProductImage::create(
            [
                'product_id' => 14,
                'thumbnail' => "Super neckless.png",
                'full' => "",
            ]
        );

        ProductImage::create(
            [
                'product_id' => 15,
                'thumbnail' => "briefcase-g4cd5f52a0_640.png",
                'full' => "",
            ]
        );

        ProductImage::create(
            [
                'product_id' => 16,
                'thumbnail' => "fashion-gfd53ddb66_640.jpg",
                'full' => "",
            ]
        );

        ProductImage::create(
            [
                'product_id' => 17,
                'thumbnail' => "handbag-g86d21a125_640.jpg",
                'full' => "",
            ]
        );

        ProductImage::create(
            [
                'product_id' => 18,
                'thumbnail' => "Women-Wallets.jpg",
                'full' => "",
            ]
        );

        ProductImage::create(
            [
                'product_id' => 19,
                'thumbnail' => "money-g9015a0239_640.jpg",
                'full' => "",
            ]
        );

        
        ProductImage::create(
            [
                'product_id' => 20,
                'thumbnail' => "model-gdbbfe2ce5_640.jpg",
                'full' => "",
            ]
        );


    }
}
