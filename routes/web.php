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
    return view('auth/login');
});

// Route::get('/panel', function(){
//  	return view('layouts/mapa');
//  });

Route::resource('Empresas','empresaController');

Route::resource('Empleados','empleadoController');

Auth::routes();

Route::get('/home', 'HomeController@index');

Route::resource('Panel', 'panelController');

Route::resource('Descanso', 'descansoController');

Route::resource('Sectores', 'sectorController');
