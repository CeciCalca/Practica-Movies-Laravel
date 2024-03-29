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

Route::get('/home', 'GenresController@index');

Route::get ('/actors', 'ActorController@index');
Route::get ('/actors/search', 'ActorController@search');
Route::get ('/actors/{id}', 'ActorController@show');


Route::get('/movies', 'MoviesController@index');
Route::get('/movies/new', 'MoviesController@create');
Route::get('/movies/{id}', 'MoviesController@show');
Route::get('/movies/update/{id}','MoviesController@edit');
Route::get('/movies/delete/{id}', 'MoviesController@update');
