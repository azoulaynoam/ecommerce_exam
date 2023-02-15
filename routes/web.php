<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ExcelProductsImportController;

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

Route::get('/', 'App\Http\Controllers\ProductController@index');
Route::get('/favorites', 'App\Http\Controllers\ProductController@favorites');
Route::get('/product/favorite/{product}', 'App\Http\Controllers\ProductController@favorite')->name('product.favorite');
Route::get('/cart/add/{product}', 'App\Http\Controllers\ProductController@add_to_cart')->name('cart.add');
Route::post('/cart/update/{product}', 'App\Http\Controllers\ProductController@update_cart')->name('cart.update');
Route::get('/cart/remove/{product}', 'App\Http\Controllers\ProductController@remove_from_cart')->name('cart.remove');

/**
 * Excel Import Route
 */
Route::get('/import', 'App\Http\Controllers\ExcelProductsImportController@show');
Route::post('/import', 'App\Http\Controllers\ExcelProductsImportController@store');