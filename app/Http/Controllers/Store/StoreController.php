<?php

namespace App\Http\Controllers\Store;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Gateways\Stripe\StripeController;
use App\Http\Controllers\Store\Products\ProductController;
use Illuminate\Foundation\Application;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

class StoreController extends Controller
{
    // Render Store Home Page

    public $products;
    public $stripe;

    public function __construct(ProductController $products, StripeController $stripe)
    {
        $this->products = $products;
        $this->stripe = $stripe;    
    }

    public function home()
    {
        return Inertia::render('fashionstoreui/Home', [
            'canLogin' => Route::has('login'),
            'canRegister' => Route::has('register'),
            'featured' => $this->products->featured(),
            'categories' => $this->products->categories(),
        ]);
    }

    // Render Store Shop Page

    public function shop()
    {
        return Inertia::render('fashionstoreui/Shop', [
            'canLogin' => Route::has('login'),
            'canRegister' => Route::has('register'),
            'products' =>  $this->products->products()
        ]);
    }

    // Render Store About Page

    public function about()
    {
        return Inertia::render('fashionstoreui/About', [
            'canLogin' => Route::has('login'),
            'canRegister' => Route::has('register'),
        ]);
    }


    // Render Store Contact Page

    public function contact()
    {
        return Inertia::render('fashionstoreui/Contact', [
            'canLogin' => Route::has('login'),
            'canRegister' => Route::has('register'),
        ]);
    }

    // Render Store Cart Page

    public function cart()
    {
        return Inertia::render('fashionstoreui/Cart', [
            'canLogin' => Route::has('login'),
            'canRegister' => Route::has('register'),
        ]);
    }

    // Render Single Shop Product

    public function shopProduct($id)
    {
        #dd("hit");
        return Inertia::render('fashionstoreui/Partials/Product', [
            'canLogin' => Route::has('login'),
            'canRegister' => Route::has('register'),
            'product' =>  $this->products->product($id)
        ]);
    }

    //-- Authentication status

    public function authenticationStatus(Request $request)
    {
        return response()->json(
            [
            'canLogin' => Route::has('login'),
            'canRegister' => Route::has('register'),
            'laravelVersion' => Application::VERSION,
            'phpVersion' => PHP_VERSION
            ]
            ,200);
    }

    public function authenticatedUser(Request $request)
    {
        return response()->json(
            Auth::user()
            ,200);
    }

    public function payment()
    {
        return Inertia::render('fashionstoreui/Partials/purchase/Payment', [
            'intent' => $this->stripe->createSetupIntent()
        ]);
    }

    public function stripePayment()
    {
        return view('payment.stripe', [
            'intent' => $this->stripe->createSetupIntent()
        ]);
    }

    public function checkAuth()
    {
        if(Auth::user())
        {
            session(['visitcart' => 'false']);
            return ['true', session('visitcart')];
        }
        else
        {
            session(['visitcart' => 'true']);
            return ['false', session('visitcart')];
        }
    }

}
