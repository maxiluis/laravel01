<!DOCTYPE html>
	<head>
		<meta charset="utf-8">
		{{HTML::style('assets/css/bootstrap.min.css')}}
	</head>
	<body>
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
		<p>{{Form::submit('Registro',array('class'=>'btn btn-success'))}}</p>

	</form>
</body>
</html>

