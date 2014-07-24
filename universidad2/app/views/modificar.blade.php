@extends('layouts/master')
@section('titulo')
	Edicion de Alumno
@stop
@section('contenido')
			<h1>Modificacion de Alumno</h1>
			{{Form::open(array('method'=>'POST', 'url'=>'modificar/'.$alumno->id))}}
			<p>
    			{{Form::label('Nombre', 'Ingrese su nombre')}}
    			{{Form::text('nombre',"$alumno->nombre",array('class' => 'form-control'))}}
  				{{$errors->first('nombre','<p class="alert alert-danger">:message</p>')}}
  			</p>
  			<p>
  				{{Form::label('apellido','Ingrese su apellido')}}
				{{Form::text('apellido',"$alumno->apellido",array('class' => 'form-control'))}}
				{{$errors->first('apellido','<p class="alert alert-danger">:message</p>')}}
			</p>
			<p>
				{{Form::label('dni','Ingrese su dni')}}
					{{Form::text('dni',"$alumno->dni",array('class' => 'form-control'))}}
					{{$errors->first('dni','<p class="alert alert-danger">:message</p>')}}
			</p>
			<p>{{Form::submit('Actualizar',array('class'=>'btn btn-danger'))}}</p>

@stop
