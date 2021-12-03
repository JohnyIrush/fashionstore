<?php

use App\Http\Controllers\Store\Products\ProductController;
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

