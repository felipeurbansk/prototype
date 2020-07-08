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

Route::get('/', 'PropertyCotroller@index');
Route::get('/imoveis/create', 'PropertyCotroller@create');
Route::post('/imoveis/store', 'PropertyCotroller@store');
Route::get('/imoveis/edit/{id}', 'PropertyCotroller@edit');
Route::put('/imoveis/update/{id}', 'PropertyCotroller@update');
Route::get('/imoveis/destroy/{id}', 'PropertyCotroller@destroy');
