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


Route::get('login', function(){

	return view('auth.login');
});

Route::get('registro', function(){

	return view('auth.registro');
});

Route::resource('auth', 'AuthController');
Route::resource('usuario', 'UserController');


Route::resource('persona', 'PersonaController');
Route::resource('empleado', 'EmpleadoController');
Route::resource('libro', 'LibroController');

Route::get('libro/{id}/destroy', [

	'uses' => 'LibroController@destroy',
	'as' => 'libro.destroy'

]);

Route::get('persona/{id}/destroy', [

	'uses' => 'PersonaController@destroy',
	'as' => 'persona.destroy'

]);

Route::get('empleado/{id}/destroy', [

	'uses' => 'EmpleadoController@destroy',
	'as' => 'empleado.destroy'

]);
