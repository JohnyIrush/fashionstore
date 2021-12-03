<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;

class CategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

     Category::truncate();

     Category::create(
         [
            'name'          =>  'jewellery',
            'description'   =>  'jewellery for men and women',
            'slug'          =>  'jewellery',
            'parent_id'     =>  1,
            'menu'          =>  1,
         ]
     );

     Category::create(
        [
           'name'          =>  'dressing',
           'description'   =>  'dressing for men and women',
           'slug'          =>  'dressing',
           'parent_id'     =>  1,
           'menu'          =>  1,
        ]
    );

    Category::create(
        [
           'name'          =>  'luggage',
           'description'   =>  'luggage for men and women',
           'slug'          =>  'luggage',
           'parent_id'     =>  1,
           'menu'          =>  1,
        ]
    );
    }
}
