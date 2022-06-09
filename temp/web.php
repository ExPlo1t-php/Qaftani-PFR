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
    return view('pages/welcome', [
        'title' => 'Qaftani | Home'
    ]);
    
});



// view (URI, view, data array)
// URI is the name that the user requests

Route::view('welcome', 'pages/welcome', [
    'title' => 'Qaftani | Home'
]);
Route::view('contact', 'pages/contact', [
    'title' => 'Qaftani | Contact'
]);

Route::view('log-in', 'pages/login', [
    'title' => 'Qaftani | Login'
]);

Route::view('register', 'pages/register', [
    'title' => 'Qaftani | Register'
]);
Route::view('cart', 'pages/cart', [
    'title' => 'Qaftani | Cart'
]);


Route::get('insert','App\Http\Controllers\UserController@insertform');
Route::post('create','App\Http\Controllers\UserController@insert');
    Route::get('checkout', 'App\Http\Controllers\CheckoutController@index'); 

    // Route::get('profile', 'App\Http\Controllers\ProfileController@index'); 

    Route::get('profile', 'App\Http\Controllers\ProfileController@index'); 
    
    // Route::get('contact', 'App\Http\Controllers\ContactController@index'); 

    Route::get('products', 'App\Http\Controllers\ProductController@index');

    Route::get('admin', 'App\Http\Controllers\UserController@index');