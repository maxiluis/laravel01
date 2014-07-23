<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', function()
{
	return View::make('hello');
});

// Route::get('insertar', 'AlumnoController@insertar');
Route::get('formulario', 'FormController@getformulario');
Route::post('formulario', 'FormController@postformulario');
Route::get('error', 'FormController@errorformulario');
Route::get('listar', function(){
	$alumnos = Alumno::all();
	$alumnos = Alumno::orderby('apellido','ASC')->get();
	return View::make('user.index')->withAlumnos($alumnos);
});
Route::get('detalle/{alumnoId}', function($alumnoId){
	// $alumno = Alumno::whereNombre($alumnoId)->first();
	$alumno = DB::table('alumno')->where('id',$alumnoId)->first();
	return View::make('user.detalle')->withAlumno($alumno);

});
// Route::get('detalle/{alumnoId}', function(){
// 	return "SI";
// });