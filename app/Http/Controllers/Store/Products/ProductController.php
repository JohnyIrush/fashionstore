<?php

namespace App\Http\Controllers\Store\Products;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function categories()
    {
        return Category::all();
    }

    public function productsByCategory($id)
    {
        return Product::whereHas("categories", function ($query) use ($id) {
            $query->where('category_id', $id);
        })->get();
    }

    public function featuredProducts()
    {
        return Product::where("featured", true);
    }

}
