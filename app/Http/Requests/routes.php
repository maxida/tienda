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
Route::bind('product', function($slug){
    return App\Product::where('slug', $slug)->first();
});


Route::get('/', [
    'as' => 'home',
    'uses' => 'StoreController@index'
]);

Route::get('product/{slug}', [
   'as' => 'product-detail',
   'uses' => 'StoreController@show'

   ]);

//CARRITO--------------------------------------------------------------------

Route::get('cart/show', [
    'as' => 'cart-show',
    'uses' => 'CartController@show'
    
]);

Route::get('cart/add/{product', [
    'as' => 'cart-add',
    'uses' => 'CartController@add'
]);