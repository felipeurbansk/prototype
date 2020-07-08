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
Route::get('/imoveis/edit', 'PropertyCotroller@edit');
Route::post('/imoveis/store', 'PropertyCotroller@store');
Route::put('/imoveis/destroy/{id}', 'PropertyCotroller@destroy');
