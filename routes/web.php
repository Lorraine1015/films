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


Route::get ('films','FilmsController@index')->name('films.index');
Route::get('films/create','FilmsController@create')->name('films.create');
Route::get('films/{film}','FilmsController@show')->name('films.show');
Route::post('films','FilmsController@store')->name('films.store');
