<?php

namespace Database\Seeders;

use App\Models\AttributeValue;
use Illuminate\Database\Seeder;

class AttributeValuesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        AttributeValue::truncate();
        
        $sizes = ['small', 'medium', 'large'];
        $colors = ['black', 'blue', 'red', 'orange'];
        $gender = ['men', 'women'];

        foreach ($sizes as $size)
        {
            AttributeValue::create([
                'attribute_id'      =>  1,
                'value'             =>  $size,
                'price'             =>  null,
            ]);
        }

        foreach ($colors as $color)
        {
            AttributeValue::create([
                'attribute_id'      =>  2,
                'value'             =>  $color,
                'price'             =>  null,
            ]);
        }

        foreach ($gender as $sex)
        {
            AttributeValue::create([
                'attribute_id'      =>  2,
                'value'             =>  $sex,
                'price'             =>  null,
            ]);
        }
    }
}
