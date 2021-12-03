<?php

namespace Database\Seeders;

use App\Models\AttributeValue;
use App\Models\Product;
use App\Models\ProductAttributes;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AttributeValueProductAttributeTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('attribute_value_product_attribute')->truncate();

        foreach ($products = Product::all() as $product) {
            # code...
            DB::table('attribute_value_product_attribute')->insert(
                [
                    'attribute_value_id' => AttributeValue::all()->random()->id,
                    'product_attribute_id' => ProductAttributes::all()->random()->id,
                ]
            );
        }
    }
}
