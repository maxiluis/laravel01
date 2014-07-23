<!DOCTYPE html>
	<head>
		<meta charset="utf-8">
		{{HTML::style('assets/css/bootstrap.min.css')}}
	</head>
	<body>
		<h1>Listado de alumnos</h1>
		<table class="table table-hover">
			<tr>
				<th>Apellido</th>
				<th>Nombre</th>
				<th>DNI</th>
			</tr>
			<?php $fila = 0;// declaro la variable para la tabla?>
			@foreach ($alumnos as $alumno)
				@if(($fila%2)==0)
					<tr class="warning">
				@endif
				@if(($fila%2)==1)
					<tr class="info">
				@endif
				 	<td>{{$alumno->apellido}}</td>
				 	<td>{{$alumno->nombre}}</td>
				 	<td>{{link_to("detalle/{$alumno->id}",$alumno->dni)}}</td>
				</tr>
				<?php $fila++?>
			@endforeach
		</table>
	</body>
</html>