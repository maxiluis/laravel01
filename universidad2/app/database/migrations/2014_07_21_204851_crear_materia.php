<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CrearMateria extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('materia', function($tabla){
			$tabla->increments('id');
			$tabla->string('nombre',50);
			$tabla->integer('alumno_id')->unsigned();
			$tabla->foreign('alumno_id')->references('id')->on('alumno')->onDelete('cascade');
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
		Schema::drop('materia');
	}

}
