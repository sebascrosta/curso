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
    return view('welcome');
});

//controlador@funcion

Route::get('pelicula/{id}', 'PeliculasController@ver');
Route::get('peliculas', 'PeliculasController@peliculas');
Route::post('prueba-post', 'PeliculasController@prueba');
