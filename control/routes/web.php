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
//Route::get('/estudiante',function (){
//    return "Hola estuadiante.";
//});

Route::resource('/estudiante','EstudiantesController');

//Route::get('/listaEstudiantes','EstudiantesController@index');
//Route::get('/nuevoEstudiante','EstudiantesController@create');

Route::get('/admin',function (){
	return view('admin.index');
});
Route::get('/saludos/{nombre?}',function ($nombre='Inserta tu nombre'){
	return 'Hola '.$nombre;
});
