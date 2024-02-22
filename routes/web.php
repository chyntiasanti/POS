<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/halo', function () {
    return view('hallo');
});

Route::prefix('category')->group(function () {
    Route::get('/food-beverage', function () {
        return view('Product.foodBeverage');
    });

    Route::get('/beauty-health', function () {
        return view('Product.beautyHealth');
    });
    
    Route::get('/home-care', function () {
        return view('Product.homeCare');
    });

    Route::get('/baby-kid', function () {
        return view('Product.babyKid');
    });
});

Route::get('/user/{id}/name/{name}', function ($id, $name) {
    return view('profile', ['id' => $id, 'name' => $name]);
});

Route::get('/transaksi', function () {
    return view('transaksi');
});