@extends('layouts.main')
@section('content')

    <h1>Registrar Pago</h1>	
	<pre>
	{{Form::open(array('action' => 'HomeController@registerpaydeposit')) }}
	{{Form::label('bank','Banco') }} 
	{{Form::select('bank', array(
	'Mercantil' => 'Mercantil',
	'Venezuela' => 'Venezuela', 
	'Provincial' => 'Provincial',
	'Bicentenario' => 'Bicentenario',
	'Exterior' => 'Exterior',
	'Banesco' => 'Banesco',
	'Exterior' => 'Exterior',
	'BOD' => 'BOD',
	'Industrial' => 'Industrial',
	'Caroni' => 'Caroní',
	'Banco del tesoro' => 'Banco del tesoro' 
	));}} 

	{{Form::label('confirmid','Número de confirmación') }} 
	{{Form::text('confirmid')}}
	{{Form::label('amount','Monto') }} 
	{{Form::text('amount')}}
	{{Form::label('date','Fecha de deposito') }} 
	{{Form::text('date')}}
    {{Form::submit('Registrar pago') }} 
            
    {{ Form::close() }}
    </pre>>
@stop

            