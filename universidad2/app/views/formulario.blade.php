@extends('layouts/master')
@section('titulo')
	Alta de usuario
@stop
@section('contenido')
	<h1>Creacion</h1>
		{{Form::open(array('method'=>'POST', 'url'=>'formulario'))}}
		<p>
    		{{Form::label('Nombre', 'Ingrese su nombre')}}
    		{{Form::text('nombre',"",array('class' => 'form-control'))}}
  			{{$errors->first('nombre','<p class="alert alert-danger">:message</p>')}}
  		</p>
  		<p>
  			{{Form::label('apellido','Ingrese su apellido')}}
			{{Form::text('apellido',"",array('class' => 'form-control'))}}
			{{$errors->first('apellido','<p class="alert alert-danger">:message</p>')}}
		</p>
		<p>
			{{Form::label('dni','Ingrese su dni')}}
			{{Form::text('dni',"",array('class' => 'form-control'))}}
			{{$errors->first('dni','<p class="alert alert-danger">:message</p>')}}
		</p>
		<p>
			{{Form::submit('Registro',array('class'=>'btn btn-success'))}}
		</p>
		{{Form::close()}}
@stop

