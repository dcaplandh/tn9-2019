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

//Listar peliculas
Route::get('/movies/list','MoviesController@index');
//Mostrar formulario de edicion
Route::get('/movies/edit/{id}','MoviesController@edit');
//Actualizar datos de la pelicula
Route::post('/movies/edit/{id}','MoviesController@update');
//Eliminar la pelicula
Route::get('/movies/destroy/{id}','MoviesController@destroy');
//Mostrar formulario de creacion de pelicula
Route::get('/movies/create','MoviesController@create');
//Guardar nueva pelicula
Route::post('/movies/create','MoviesController@store');

//Mostrar formulario de creacion de usuario
Route::get('/users/create','UserController@create');
//Guardar nuevo usuario
Route::post('/users/create','UserController@store');
//Mostrar formulario de edicion de usuario
Route::get('/users/edit/{dato}','UserController@edit');
Route::post('/users/edit/{dato}','UserController@update');