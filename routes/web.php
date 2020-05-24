<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--w------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::get('/news', 'NewsController@index')->name('news');

Route::get('/shop', 'ShopController@index')->name('shop');

Route::get('/information', function () {
    return view('information');
})->name('information');

Route::get('/price', function () {
    return view('price');
})->name('price');



Route::get('/item', function () {
    return view('item');
})->name('item');

Route::get('/contacts', function () {
    return view('contacts');
})->name('contacts');

Auth::routes();

Route::get('home', function () {
    return view('welcome');
})->name('home');

Route::get('/register', function () {
    return view('register');
})->name('register');
