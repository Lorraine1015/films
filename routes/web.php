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
Route::get('films/create','FilmsController@create')->name('films.create');//Crea la informacion para la base de datos
Route::get('films/{film}/edit','FilmsController@edit')->name('films.edit'); //Edita los datos de una fila
Route::get('films/{film}','FilmsController@show')->name('films.show');//Mmuestra la info. de la base de datos
Route::post('films','FilmsController@store')->name('films.store');//Envia los datos para almacenarlos en la base de datos
Route::put('films/{film}','FilmsController@update')->name('films.update');//Actualiza la informacion de la base
Route::delete('films/{film}','FilmsController@delete')->name('films.delete');//Eliminar la info. de una fila de datos