<?php
/**
*
*/
class FormController extends BaseController
{
	public function getformulario()
	{
		return View::make('formulario');
	}

	public function postformulario(){
		$nombre      = Input::get('nombre');
		$apellido    = Input::get('apellido');
		$dni         = Input::get('dni');
		$datos       = Input::all();
		$condiciones = array(
			"nombre"   => 'required|min:3|max:15',
			"apellido" => 'required|min:3|max:15',
			"dni"      => 'required|min:7|max:8|unique:alumno'
			);

		$validacion = Validator::make($datos, $condiciones);
		if($validacion->fails()){
			return Redirect::back()->withInput()->withErrors($validacion);
		}
		Alumno::insertar($nombre,$apellido,$dni);
		return Redirect::to('listar');


	}


	public function errorformulario(){
		return View::make('error');
	}

	public function postmodificacion($alumnoId)
	{
		//$nombre      = Input::get('nombre');
		// $apellido    = Input::get('apellido');
		// $dni         = Input::get('dni');
		// // $datos       = Input::all();
		// // $condiciones = array(
		// //3 	"nombre"   => 'required|min:3|max:15',
		// // 	"apellido" => 'required|min:3|max:15',
		// // 	"dni"      => 'required|min:7|max:8'
		// // 	);

		// // $validacion = Validator::make($datos, $condiciones);
		// // if($validacion->fails()){
		// // 	return Redirect::back()->withInput()->withErrors($validacion);
		// // }
		$alumno = Alumno::find($alumnoId);
		$alumno->nombre = Str::title(Input::get('nombre'));
		$alumno->apellido =  Str::title(Input::get('apellido'));
		$alumno->dni = Input::get('dni');
		$alumno->save();
		return Redirect::to('listar');
	}

	public function geteliminacion($alumnoId){
		DB::table('alumno')->where('id',$alumnoId)->update(array('visible'=>1));
		return Redirect::to('listar');
	}





}


?>