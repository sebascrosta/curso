<?php
use Illuminate\Support\Facades\Route;
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

Route::get('/', 'MovieController@home');
Route::get('/movies', 'MovieController@find');

Route::get('/movies/{id}', 'MovieController@show');

Route::group(['middleware' => ['auth']], function(){
    Route::get('/movies/create', 'MovieController@createForm');
});

//Route::post('/movies', 'MovieController@store');
Route::post('/movies', 'MovieController@storeFormRequests');

Auth::routes();

Route::get('/home', 'HomeController@index');
