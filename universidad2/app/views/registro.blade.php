{{Form::open(array('method'=>'POST'),'url'=>'registro')}}

{{Form::label('Nombre','Ingrese su nombre')}}
{{Form::text('usuario')}}

{{Form::label('Apellido','Ingrese su apellido')}}
{{Form::text('usuario','',array('class'=>'form-group'))}}

{{Form::close()}}
