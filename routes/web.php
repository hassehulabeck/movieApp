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

Route::get('/movies', 'MovieController@index');
Route::get('/movies/{id}', 'MovieController@show');

Route::post('/movies/insert/', 'MovieController@store');

Route::get('/moviesByQuery', 'MovieController@mbq');
Route::get('/moviesByQuery/between/{firstYear}/and/{lastYear}', 'MovieController@mbq');

Route::get('/actorsByQuery', 'ActorController@getAll');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
