<?php

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
Route::get('/celana', 'CelanaController@index');
Route::get('/celana/create', 'CelanaController@create');
Route::post('/celana', 'CelanaController@store');
Route::get('/celana/{id}/edit', 'CelanaController@edit');
Route::patch('/celana/{id}', 'CelanaController@update');
Route::delete('/celana/{id}', 'CelanaController@destroy');

Route::get('/buyer', 'BuyerController@index');
Route::get('/buyer/create', 'BuyerController@create');
Route::post('/buyer', 'BuyerController@store');
Route::get('/buyer/{id}/edit', 'BuyerController@edit');
Route::patch('/buyer/{id}', 'BuyerController@update');
Route::delete('/buyer/{id}', 'BuyerController@destroy');