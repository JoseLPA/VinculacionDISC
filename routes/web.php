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

Route::get('/k', function () {
    return view('welcome');


});


Route::get('/ActividadExtension', 'ControllerActividadExtension@index');
Route::post('/ActividadExtension', 'ControllerActividadExtension@opcion');
Route::get('/ActividadExtension/agregar', 'ControllerActividadExtension@agregar');
Route::post('/ActividadExtension/agregar', 'ControllerActividadExtension@agregar');
Route::post('/ActividadExtension/buscar', 'ControllerActividadExtension@buscar');
Route::post('/ActividadExtension/editar', 'ControllerActividadExtension@editar');
Route::post('/ActividadExtension/eliminar', 'ControllerActividadExtension@eliminar');