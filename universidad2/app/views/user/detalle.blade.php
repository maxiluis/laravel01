@extends('layouts/master')
@section('titulo')
	Detalles
@stop
@section('contenido')
	<div class="tab-pane" id="profile">
			<p class="text-muted"><h3>Nombre:{{$alumno->nombre}}</h3></p>
			<p class="text-primary"><h3>Apellido: {{$alumno->apellido}}</h3></p>
			<p class="text-info"><h3>DNI: {{$alumno->dni}}</h3></p>
	</div>
@stop

