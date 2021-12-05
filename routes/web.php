<?php

use App\Http\Controllers\Store\Products\PurchaseController;
use App\Http\Controllers\Store\StoreController;
use Illuminate\Contracts\Cache\Store;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

/*
Route::get('/', function () {
    return Inertia::render('fashionstoreui/home', [
        'canLogin' => Route::has('login'),
        'canRegister' => Route::has('register'),
        'laravelVersion' => Application::VERSION,
        'phpVersion' => PHP_VERSION,
    ]);
});
*/


Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return Inertia::render('Dashboard');
})->name('dashboard');

/*
Route::get('inertia-welcome', function(){
 return Inertia::render("InertiaWelcome",[
     "foo" => 'bar'
 ]);
});

*/

// Store UI Routes

Route::get('/', [StoreController::class, 'home']);
Route::get('/shop', [StoreController::class, 'shop']);
Route::get('/about', [StoreController::class, 'about']);
Route::get('/contact', [StoreController::class, 'contact']);
Route::get('/cart', [StoreController::class, 'cart']);
Route::get('/shop/product/{id}', [StoreController::class, 'shopProduct']);

// Product Purchase routes

Route::post('add-to-cart/{id}',[PurchaseController::class,'addtocart']);
Route::post('cart-quantity',[PurchaseController::class,'cartQuantity']);
Route::post('cart-items',[PurchaseController::class,'cartItems']);

// Fetch authentication status

Route::post('authentication-status',[StoreController::class,'authenticationStatus']);

//-- cart Actions
Route::get('/remove/{id}',[PurchaseController::class, 'removeItem']);
Route::get('/reduce/{id}',[PurchaseController::class,'reduceProductByOne']);