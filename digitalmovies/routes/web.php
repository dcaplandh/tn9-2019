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
Route::get('/home','MoviesController@index');
Route::get('/peliculas','MoviesController@traertodas');
Route::get('/pelicula/{id_de_peli}','MoviesController@traerPorId');
Route::get('/peliculas/mejores','MoviesController@mejoresPeliculas');