<?php

use App\Http\Controllers\Store\Products\ProductController;
use App\Http\Controllers\Store\Products\PurchaseController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

// Products api routes

Route::get('/categories', [ProductController::class,'categories']); // fetch categories
Route::get('/products/{id}', [ProductController::class,'productsByCategory']); // fetch products by category
Route::get('/featured', [ProductController::class,'featured']); // fetch featured products
Route::get('/product/{id}/reviews', [ProductController::class,'productReviews']); // fetch all reviews of a product
Route::get('/product/{id}/reviews/total', [ProductController::class,'productTotalReviews']); // fetch reviews count of a product
Route::get('/product/{id}/rating', [ProductController::class,'productRating']); // calculate product rating
Route::get('/product/{id}/attributes', [ProductController::class,'productAttribute']); // calculate product rating
Route::get('/products', [ProductController::class,'products']); // fetch products
Route::get('/product/{id}', [ProductController::class,'product']); // fetch a single product
