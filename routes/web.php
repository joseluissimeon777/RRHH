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

Auth::routes();

Route::get('/home', 'HomeController@index');

Route::resource('empleados', 'EmpleadosController');

Route::resource('puestos', 'PuestosController');

Route::get('/home/edit', 'HomeController@edit');


Route::patch('/home/update','HomeController@update');

Route::patch('home.update' , 'HomeController@update');