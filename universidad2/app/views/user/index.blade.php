@extends('layouts/master')
@section('titulo')
	Listado de Alumnos
@stop
@section('contenido')

		<h1>Listado de alumnos</h1>

		<table class="table table-hover">
			<tr>
				<th>Apellido</th>
				<th>Nombre</th>
				<th>DNI</th>
				<th>Opciones</th>

			</tr>
			<?php
				$fila = 0;
				$modify = 'Modificar';
				$delete = 'Eliminar';
				$view = 'Ver';
			?>
			@foreach ($alumnos as $alumno)
				@if(($fila%2)==0)
					<tr class="warning">
				@endif
				@if(($fila%2)==1)
					<tr class="info">
				@endif
				 	<td>{{$alumno->apellido}}</td>
				 	<td>{{$alumno->nombre}}</td>
				 	<td>{{$alumno->dni}}</td>
				 	<td>
				 		{{link_to("modificar/{$alumno->id}",$modify, array('class'=>'btn btn-primary btn-sm'))}}
				 		{{link_to("eliminar/{$alumno->id}",$delete, array('class'=>'btn btn-danger btn-sm'))}}
				 		{{link_to("detalle/{$alumno->id}"  ,$view,   array('class'=>'btn btn-success btn-sm'))}}
				 	</td>

				</tr>
				<?php $fila++?>
			@endforeach
		</table>

@stop