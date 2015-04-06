@extends('layouts.main')
@section('content')

    	
	<row><div class="col-md-4"></div>
	<div class="col-md-4">
	<div class="jumbotron">
	<h2>Registrar Pago</h2>

	</br>

	{{Form::open(array('action' => 'HomeController@pay')) }}
		{{Form::select('payment', array('none' => 'Tipo de pago','Cheque' => 'Cheque', 'Transferencia' => 'Transferencia', 'Deposito' => 'Deposito'), null, array('class' => 'form-control', 'id' => 'payment_method2'));}} 
		</br>
    	<select id="bank" name="bank" class = "form-control"><option value="Mercantil">Mercantil</option><option value="Venezuela">Venezuela</option><option value="Provincial">Provincial</option><option value="Bicentenario">Bicentenario</option><option value="Exterior">Exterior</option><option value="Banesco">Banesco</option><option value="BOD">BOD</option><option value="Industrial">Industrial</option><option value="Caroni">Caron&iacute;</option><option value="Banco del tesoro">Banco del tesoro</option></select>  
		</br>
		{{Form::text('confirmid','',array('class' => 'form-control','placeholder'=> 'Codigo de confirmacion'))}}
		</br>
		{{Form::text('amount','',array('class' => 'form-control','placeholder'=>'Monto'))}}
		</br>
		{{Form::text('date','',array('class' => 'form-control','placeholder'=>'Fecha del pago: AAAA-MM-DD'))}}
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

            
              