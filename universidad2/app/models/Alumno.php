<?php
use Illuminate\Auth\UserTrait;
use Illuminate\Auth\UserInterface;
use Illuminate\Auth\Reminders\RemindableTrait;
use Illuminate\Auth\Reminders\RemindableInterface;

class Alumno extends Eloquent implements UserInterface, RemindableInterface{
	use UserTrait, RemindableTrait;

	protected $table = 'alumno';

	public function materia(){
		return $this->hasMany('Materia','alumno_id');
	}

	public static function insertar($nombre, $apellido, $dni){
		$nombre = Str::title($nombre);
		$apellido = Str::title($apellido);
		$dni = Str::title($dni);
		DB::table('alumno')->insertGetId(array('nombre'=>$nombre,'apellido'=>$apellido,'dni'=>$dni));

	}
}



?>