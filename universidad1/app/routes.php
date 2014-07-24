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
	return Redirect::to('/listar');
});

Route::get('/formulario', 'FormController@getformulario');
Route::get('/listar', function(){
	$alumnos = DB::table('alumno')->where('visible', '=' , 0)->orderby('apellido','ASC')->get();
	return View::make('user.index')->withAlumnos($alumnos);
});
Route::get('/detalle/{alumnoId}', function($alumnoId){
	// $alumno = Alumno::whereNombre($alumnoId)->first();
	$alumno = DB::table('alumno')->where('id',$alumnoId)->first();
	return View::make('user.detalle')->withAlumno($alumno);

});
Route::get('/modificar/{alumnoId}', function($alumnoId){
	$alumno = DB::table('alumno')->where('id',$alumnoId)->first();
	return View::make('modificar')->withAlumno($alumno);
});
Route::get('/eliminar/{alumnoId}', 'FormController@geteliminacion');
//POST
Route::post('/formulario', 'FormController@postformulario');
Route::post('/modificar/{alumnoId}','FormController@postmodificacion');

