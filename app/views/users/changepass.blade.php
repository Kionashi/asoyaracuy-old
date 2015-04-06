@extends('layouts.main')
@section('content')
	
	<div class = "error-msg" style="color:red;">
	    <?if(isset($response)):?>
	    	<?=$response ?>
	    <?endif; ?>
	</div>
	<div class= "row">
		<div class="col-md-4"></div>
		<div class="col-md-7"><h1>Cambiar Contraseña</h1></div>
		<div class="col-md-2"></div>
	</div>
	<div class= "row">
		<div class="col-md-4"></div>
		<div class="col-md-4 jumbotron">
		{{Form::open(array('action' => 'UsersController@changepass')) }}
		</br>

 		{{ Form::password('password3', array('class' => 'form-control','placeholder' => 'Contraseña Actual')) }}	    
 		</br>
 		{{ Form::password('password', array('class' => 'form-control','placeholder' => 'Nueva contraseña')) }}
       	</br>
       	{{ Form::password('password2', array('class' => 'form-control','placeholder' => 'Repita la contraseña')) }}
       	</br>
    	{{Form::submit('Cambiar Contraseña',array('class' => 'btn btn-lg btn-primary btn-block')) }} 
	    {{ Form::close() }}
		
		</div>
		<div class="col-md-4"></div>
	</div>
@stop
