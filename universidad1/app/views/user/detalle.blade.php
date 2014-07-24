@extends('layouts/master')
@section('titulo')
	Detalles
@stop
@section('contenido')
	<div class="tab-pane" id="profile">
		<h1>Detalle de: {{$alumno->nombre}}</h1>
			<p class="text-muted">Nombre:{{$alumno->nombre}}</p>
			<p class="text-primary">Apellido: {{$alumno->apellido}}</p>
			<p class="text-info">DNI: {{$alumno->dni}}</p>
	</div>
@stop

