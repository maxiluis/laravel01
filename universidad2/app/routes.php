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
Route::get('login','SessionsController@create');


Route::get('/','SessionsController@create');
Route::get('/logout','SessionsController@destroy');
Route::get('/formulario', 'FormController@getformulario')->before('auth');;
Route::get('/login', 'SessionsController@create');
Route::get('/listar', function(){
	$alumnos = DB::table('alumno')->where('visible', '=' , 0)->orderby('apellido','ASC')->get();
	return View::make('user.index')->withAlumnos($alumnos);
})->before('auth');
Route::get('/detalle/{alumnoId}', function($alumnoId){
	// $alumno = Alumno::whereNombre($alumnoId)->first();
	$alumno = DB::table('alumno')->where('id',$alumnoId)->first();
	return View::make('user.detalle')->withAlumno($alumno);

})->before('auth');
Route::get('/modificar/{alumnoId}', function($alumnoId){
	$alumno = DB::table('alumno')->where('id',$alumnoId)->first();
	return View::make('modificar')->withAlumno($alumno);
})->before('auth');
Route::get('/eliminar/{alumnoId}', 'FormController@geteliminacion')->before('auth');
//POST
Route::post('/formulario', 'FormController@postformulario')->before('auth');
Route::post('/modificar/{alumnoId}','FormController@postmodificacion')->before('auth');
Route::post('store', 'SessionsController@store');
