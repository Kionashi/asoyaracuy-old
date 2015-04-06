@extends('layouts.adminbase')
@section('content')
  <row>
    <div class="col-md-4">
      <h1>Tarifa Actual: <?= $fee->value?></h1>
    </div>
    <div class="col-md-4">
          {{Form::open(array('action' => 'AdminController@addFee')) }}
          <h1>Modificar Tarifa</h1>
          {{Form::text('value','',array('class' => 'form-control','placeholder'=> 'Nuevo Valor'))}}
          <!-- submit buttons -->
          {{ Form::submit('Guardar') }}          
          <!-- reset buttons -->
          {{ Form::reset('Reset') }}          
          {{ Form::close() }}
    </div>
    <div class="col-md-4">
      {{Form::open(array('action' => 'AdminController@applyFee')) }}
        {{Form::submit('Aplicar Tarifa Manual',array('class' => 'btn btn-lg btn-primary btn-block')) }}  
      {{ Form::close() }}  
    </div>
  </row>  
  
         
@stop