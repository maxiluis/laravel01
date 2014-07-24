<!DOCTYPE html>
	<head>
		<meta charset="utf-8">
		{{HTML::style('assets/css/bootstrap.min.css')}}
	</head>
	<body>
		<div class="container">
			<div class="row">
				<div class="col-md-4">
				</div>
				<div class="col-md-4">
					<div class="panel panel-primary">
						<div class="panel-heading">Acceso de usuarios</div>
						<div class="panel-body">
							{{Form::open(array('method'=>'POST','url'=>'store'))}}
								<p>
									{{Form::label('username','Ingrese su usuario')}}
									{{Form::text('username',"",array('class'=>'form-control'))}}
								</p>
								<p>
									{{Form::label('password','Ingrese su contraseña')}}
									{{Form::password('password',array('class'=>'form-control'))}}
									{{$errors->first('errores','<p class="alert alert-danger">:message</p>')}}
								</p>
								<p>
									{{Form::submit('Iniciar Sesion',array('class'=>'btn btn-success'))}}
								</p>
							{{Form::close()}}
						</div>
					</div>
				</div>
			</div>
		</div>
	</body>
</html>


