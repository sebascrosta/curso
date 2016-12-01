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

Route::get('/', 'MovieController@bestMovies');
Route::get('/movies', 'MovieController@searchByName');
Route::get('/movie/{id}', 'MovieController@showMovieById');
Route::get('/actors', 'ActorController@showAllActors');
Route::get('/actor/{id}', 'ActorController@showActorById');
Route::get('/addActor', 'ActorController@showAddActor');
Route::get('/actorAdded', 'ActorController@addActor');
Route::get('/addMovie', 'MovieController@showAddMovie');
Route::get('/movieAdded', 'MovieController@addMovie');
Route::get('/searchActor', 'ActorController@searchByName');

Auth::routes();

Route::get('/home', 'HomeController@index');
