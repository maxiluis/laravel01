<!DOCTYPE html>
	<head>
		<meta charset="utf-8">
		{{HTML::script('assets/js/jquery.js')}}
		{{HTML::style('assets/css/bootstrap.min.css')}}
		{{HTML::script('assets/js/bootstrap.min.js')}}
		<title> @yield('titulo')</title>
	</head>
	<body>

		<div class="navbar-example">
			<nav class="navbar navbar-default navbar-fixed-top" role="navigation">
  				<div class="container-fluid">
    				<div class="navbar-header">
      				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
        				<span class="sr-only">Toggle navigation</span>
        				<span class="icon-bar"></span>
        				<span class="icon-bar"></span>
        				<span class="icon-bar"></span>
      				</button>
      				<a class="navbar-brand" href="#">CRUD con Laravel</a>
    			</div>
    			<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      				<ul class="nav navbar-nav">

        				<li class ="active"><a href="{{URL::to('/listar')}}"><span class="glyphicon glyphicon-list"></span>Listar</a></li>
        				<li><a href="{{URL::to('/formulario')}}"><span class="glyphicon glyphicon-plus"></span>Crear</a></li>
                <li><a href="{{URL::to('/logout')}}"><span class="glyphicon glyphicon-off"></span>Cerrar Sesion</a></li>
     				</ul>
    			</div><!-- /.navbar-collapse -->
  			</div><!-- /.container-fluid -->
		</nav>
	</div>
	<div class="container">
		<center><h2>Aplicacion de prueba de laravel</h2></center>
		@yield('contenido')
	</div>

	</body>
</html>