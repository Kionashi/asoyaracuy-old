@extends('layouts.adminbase')
@section('content')
	
	<div class = "error-msg" style="color:red;">
	    <?if(isset($response)):?>
	    	<?=$response ?>
	    <?endif; ?>
	</div>
	<div class= "row">
		<div class="col-md-4"></div>
		<div class="col-md-7"><h1>Crear Nuevo Usuario</h1></div>
		<div class="col-md-2"></div>
	</div>
	<div class= "row">
		<div class="col-md-4"></div>
		<div class="col-md-4 jumbotron">
		{{Form::open(array('action' => 'UsersController@register')) }}
		</br>
		{{Form::text('name', null, ['class' => 'form-control','placeholder' => 'Nombre']) }}
		</br>
		{{Form::text('last_name', null, ['class' => 'form-control','placeholder' => 'Apellido']) }}
		</br>
		{{Form::text('email', null, ['class' => 'form-control','placeholder' => 'Correo Electronico']) }}
		</br>
		{{$errors->first('email')}}
		{{Form::text('phone', null, ['class' => 'form-control','placeholder' => 'Telefono']) }}
		</br>
		{{Form::text('house', null, ['class' => 'form-control','placeholder' => 'Quinta']) }}
		</br>
		{{Form::text('CI', null, ['class' => 'form-control','placeholder' => 'Cedula']) }}
 		</br>
 		{{ Form::password('password', array('class' => 'form-control','placeholder' => 'Contraseña')) }}	    
 		{{$errors->first('password')}}
 		</br>
 		{{ Form::password('password', array('class' => 'form-control','placeholder' => 'Repita la contraseña')) }}
 	    {{$errors->first('password2')}} 
       	</br>
       	<select id="power" name="power" class = "form-control"><option value="1">Usuario</option><option value="2">Administrador</option><option value="3">Administrador de contenido</option><option value="4">Administrador de Pagos</option><option value="5">Administrador de Usuarios</option></select>  
       	</br>
    	{{Form::submit('Crear Nuevo Usuario',array('class' => 'btn btn-lg btn-primary btn-block')) }} 
	    {{ Form::close() }}
		
		</div>
		<div class="col-md-4"></div>
	</div>
@stop
