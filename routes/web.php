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

Route::get('/','HomeController@index')->name('homepage');

//RUTAS DE AUTENTICACION DE SESION DE USUARIO//
Route::get('registro','UsersController@register')->name('users.register');
Route::post('registro','UsersController@store')->name('users.store');
Route::get('perfil','UsersController@profile')
->middleware('auth')
->name('users.profile');
Route::get('cerrar_sesion','UsersController@logout')->name('users.logout');
Route::get('iniciar-sesion','UsersController@login')->name('login');
Route::post('iniciar-sesion','UsersController@authenticate')->name('users.authenticate');
//RUTAS DE FILMS//
Route::get ('films','FilmsController@index')->name('films.index');//Vista principal
Route::get('films/create','FilmsController@create')->name('films.create');//Crea la informacion para la base de datos
Route::get('films/{film}/edit','FilmsController@edit')->name('films.edit'); //Edita los datos de una fila
Route::get('films/{film}','FilmsController@show')->name('films.show');//Muestra la info. de la base de datos

Route::get('films/{catalog}/catalogs/edit','CatalogsFilmsController@edit')->name('films.catalogs.edit');
Route::put('films/{catalog}/catalogs/update','CatalogsFilmsController@update')->name('films.catalogs.update');


Route::post('films','FilmsController@store')->name('films.store');//Envia los datos para almacenarlos en la base de datos
Route::put('films/{film}','FilmsController@update')->name('films.update');//Actualiza la informacion de la base
Route::delete('films/{film}','FilmsController@delete')->name('films.delete');//Eliminar la info. de una fila de datos

//RUTAS DE CATALOGS//
Route::get ('catalogs','CatalogsController@index')->name('catalogs.index');
Route::get ('catalogs/create','CatalogsController@create')->name('catalogs.create');
Route::get('catalogs/{catalog}/edit','CatalogsController@edit')->name('catalogs.edit');
Route::get ('catalogs/{catalog}','CatalogsController@show')->name('catalogs.show');
Route::post('catalogs','CatalogsController@store')->name('catalogs.store');
Route::put('catalogs/{catalog}','CatalogsController@update')->name('catalogs.update');
Route::delete('catalogs/{catalog}','CatalogsController@delete')->name('catalogs.delete');

//RUTAS DE GENRES//
Route::get ('genres','GenresController@index')->name('genres.index');
Route::get ('genres/create','GenresController@create')->name('genres.create');
Route::get('genres/{genre}/edit','GenresController@edit')->name('genres.edit');
Route::get ('genres/{genre}','GenresController@show')->name('genres.show');
Route::post('genres','GenresController@store')->name('genres.store');
Route::put('genres/{genre}','GenresController@update')->name('genres.update');
Route::delete('genres/{genre}','GenresController@delete')->name('genres.delete');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
