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

Route::get('/home', 'HomeController@index')->name('home');
Route::get('AdmConvenio','ConvenioController@index')->name('AdmConvenio');
Route::resource('convenio','ConvenioController');
Route::get('AdmActividadExtension','ActividadExtensionController@index')->name('AdmActividadExtension');
Route::resource('actividadExtension','ActividadExtensionController');
Route::get('AdmAprendizajeServicio','AprendizajeServicioController@index')->name('AdmAprendizajeServicio');
Route::resource('aprendizajeServicio','AprendizajeServicioController');
Route::get('AdmTitulado','TituladoController@index')->name('AdmTitulado');
Route::resource('titulado','TituladoController');
Route::get('AdmActividadTitulacion','ActividadTitulacionController@index')->name('AdmActividadTitulacion');
Route::resource('actividadTitulacion','ActividadTitulacionController');