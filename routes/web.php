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
    return view('welcome');
});

Route ::get('home_page', function() {
    return view('home_page');
})->name("home_page");

Route::get('about_us',function(){
    return view('about_us');
})->name("about_us");

Route::get('contact_us',function(){
    return view('contact_us');
})->name("contact_us");

Route::get('gallery',function(){
    return view('gallery');
})->name("gallery");

Route::get('registration',function(){
    return view('registration');
})->name("registration");

Route::get('login',function(){
    return view('login');
})->name("login");