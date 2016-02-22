<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/



Route::get('/test', function () {
    return ('welcome');
});


Route::get('/', 'eshopController@index');
//Route::post('/product', 'productController@index');
//Route::get('/ctproduct', 'productController@categoryproducts');
Route::post('/category/{id}', 'categoryController@show');
Route::post('/product/{id}', 'productController@showProduct');

Route::get('/product/{name}', 'productController@getProduct');