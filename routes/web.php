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