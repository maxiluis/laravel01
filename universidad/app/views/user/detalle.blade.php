<!DOCTYPE html>
	<head>
		<meta charset="utf-8">
		{{HTML::style('assets/css/bootstrap.min.css')}}
	</head>
	<body>
		<h1>Detalle de: {{$alumno->nombre}}</h1>

			<p class="text-muted">Nombre:{{$alumno->nombre}}</p>
			<p class="text-primary">Apellido: {{$alumno->apellido}}</p>
			<p class="text-info">DNI: {{$alumno->dni}}</p>

	</body>
</html>