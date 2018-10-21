<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', function () {
    return view('index');
});


Route::get('/supplier/{id?}','SupplierController@index');
Route::post('/supplier','SupplierController@store');
Route::post('/supplier/{id}','SupplierController@update');
Route::delete('/supplier/{id}','SupplierController@destroy');
