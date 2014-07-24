<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CrearAlumno extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('alumno', function($tabla){
			$tabla->increments('id');
			$tabla->string('nombre',50);
			$tabla->string('apellido',50);
			$tabla->string('dni',8)->unique();
			$tabla->timestamps();
		});

	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		//borrar las clases
		Schema::drop('alumno');
	}

}
