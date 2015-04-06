@extends('layouts.main')
@section('content')

    	
	<row><div class="col-md-4"></div>
	<div class="col-md-4">
	<div class="jumbotron">
	<h2>Registrar Pago</h2>
	</br>
	{{Form::open(array('action' => 'HomeController@registerpaycheck')) }}
	<select id="bank" name="bank" class = "form-control"><option value="Mercantil">Mercantil</option><option value="Venezuela">Venezuela</option><option value="Provincial">Provincial</option><option value="Bicentenario">Bicentenario</option><option value="Exterior">Exterior</option><option value="Banesco">Banesco</option><option value="BOD">BOD</option><option value="Industrial">Industrial</option><option value="Caroni">Caron&iacute;</option><option value="Banco del tesoro">Banco del tesoro</option></select>  
	</br>
	{{Form::text('confirmid','Código del cheque',array('class' => 'form-control'))}}
	</br>
	{{Form::text('amount','Monto',array('class' => 'form-control'))}}
	</br>
    {{Form::submit('Registrar pago',array('class' => 'btn btn-lg btn-primary btn-block')) }} 
            
    {{ Form::close() }}
    </div>
    </div>
    <div class="col-md-4"></div>
    </row>
    <row>
    </br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br>hola</row>

@stop

            
              