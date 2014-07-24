<?php
class Materia extends Eloquent{

 	public function alumno()
 	{
 		return $this->belongsTo('Alumno');
 	}
}


?>