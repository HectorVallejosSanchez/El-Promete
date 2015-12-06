<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/


Route::get('/', 'indexController@index');
Route::get('/listado','detalleController@index');
/*Route::get('/listado', function () {
    return view('listado');
});*/
Route::resource('/detalle','detalleController');
Route::get('/mipagina','controllerpagina@index');
Route::resource('propuesta','propuestaController');

Route::resource('candidato','candidatoController');
Route::resource('/propuesta','propuestaController');
