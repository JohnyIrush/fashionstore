<?php

namespace App\Http\Controllers\Store;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

class StoreController extends Controller
{
    // Render Store Home Page

    public function home()
    {
        return Inertia::render('fashionstoreui/Home', [
            'canLogin' => Route::has('login'),
            'canRegister' => Route::has('register'),
        ]);
    }

    // Render Store Shop Page

    public function shop()
    {
        return Inertia::render('fashionstoreui/Shop', [
            'canLogin' => Route::has('login'),
            'canRegister' => Route::has('register'),
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

    public function shopProduct()
    {
        return Inertia::render('fashionstoreui/Partials/Product', [
            'canLogin' => Route::has('login'),
            'canRegister' => Route::has('register'),
        ]);
    }
}
