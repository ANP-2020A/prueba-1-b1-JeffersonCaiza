<?php

use Illuminate\Http\Request;
use app\Customers;
use app\Products;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::get('customers', 'CustomerController@index');
Route::get('customers/{id}', 'CustomerController@show');
Route::post('customers', 'CustomerController@store');
Route::put('customers/{id}', 'CustomerController@update');
Route::delete('customers/{id}', 'CustomerController@delete');

Route::get('products', 'ProductsController@index');
Route::get('products/{id}', 'ProductsController@show');
Route::post('products', 'ProductsController@store');
Route::put('products/{id}', 'ProductsController@update');
Route::delete('products/{id}', 'ProductsController@delete');
