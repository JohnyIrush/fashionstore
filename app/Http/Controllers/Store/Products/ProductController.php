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

    public function featured()
    {
        $products = (Product::with("images")
                         ->where("featured", true)
                         ->get());

        foreach($products as $product)
        {
            $product["TotalReviews"] = $this->productTotalReviews($product->id);
        }

        return response()->json($products, 200);

    }

    public function productReviews($id)
    {
        return Product::find($id)->reviews;
    }

    public function productTotalReviews($id)
    {
        return sizeof($this->productReviews($id));
    }

    public function productRating($id)
    {
        $reviews = $this->productReviews($id);

        $rating = 0;

        foreach ($reviews as $review) {
            $rating += $review->rating;
        }

        return ($rating/$this->productTotalReviews($id));
    }

    public function productAttributes($id)
    {
        
    }

    public function products()
    {
        return response()->json(Product::all(),200);
    }


}
