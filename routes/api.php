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

Route::get('customers', function() {     return Customers::all(); });

Route::get('customers/{id}', function($id) {     return Customers::find($id); });

Route::post('customers', function(Request $request) {     return Customers::create($request->all()); });

Route::put('customers/{id}', function(Request $request, $id) {     $article = Customers::findOrFail($id);     $article->update($request->all());

    return $article; });

Route::delete('products/{id}', function($id) {     Products::find($id)->delete();     return 204; });


Route::get('products', function() {     return Products::all(); });

Route::get('products/{id}', function($id) {     return Products::find($id); });

Route::post('products', function(Request $request) {     return Products::create($request->all()); });

Route::put('products/{id}', function(Request $request, $id) {     $article = Products::findOrFail($id);     $article->update($request->all());

    return $article; });

Route::delete('products/{id}', function($id) {     Products::find($id)->delete();     return 204; });
