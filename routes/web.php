<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('front.home');
});

Route::get('/wholesale', function () {
    return view('front.wholesale');
});

Route::get('/shop', function () {
    return view('front.shop');
});

Route::get('/faqs', function () {
    return view('front.faqs');
});

Route::get('/about-us', function () {
    return view('front.about');
});

Route::get('/privacy-policy', function () {
    return view('front.privacy');
});

Route::get('/terms-conditions', function () {
    return view('front.terms');
});

Route::get('/contact-us', function () {
    return view('front.contact');
});

Route::get('/blog', function () {
    return view('front.blog');
});

//product category
Route::get('shop/product-category/3', function () {
    return view('front.category3');
});
Route::get('shop/product-category/4-5', function () {
    return view('front.category45');
});
Route::get('shop/product-category/4', function () {
    return view('front.category4');
});
Route::get('shop/product-category/uncategorized', function () {
    return view('front.uncategorized');
});
Route::get('shop/nautical-star', function () {
    return view('front.nautical_star');
});
Route::get('shop/lime', function () {
    return view('front.lime');
});
Route::get('shop/squares', function () {
    return view('front.squares');
});
Route::get('shop/rasta-peace', function () {
    return view('front.rasta');
});
Route::get('shop/eyeball', function () {
    return view('front.eyeball');
});
Route::get('shop/spiral', function () {
    return view('front.spiral');
});