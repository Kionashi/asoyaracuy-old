@extends('layouts.adminbase')
@section('content')

{{Form::open(array('action' => 'AdminController@searchpayments')) }}
    {{Form::label('search','Buscar') }} 
    {{Form::text('busqueda')}} 
{{ Form::close() }}

{{Form::open(array('action' => 'AdminController@managePayments')) }}
        <div id="table_div"></div>


        <script type="text/javascript">
        google.load("visualization", "1", {packages:["table"]});
          google.setOnLoadCallback(drawTable);

          function drawTable() {
            var data = new google.visualization.DataTable();
   
            data.addColumn('number', '#');
            data.addColumn('string', 'Quinta');
          	data.addColumn('string', 'Tipo de pago');
            data.addColumn('string', 'Banco');
            data.addColumn('string', 'Codigo de confirmación');
            data.addColumn('string', 'Fecha');
            data.addColumn('string', 'Fecha de registro');
            data.addColumn('number', 'Monto');
            data.addColumn('string', 'Estado');
            data.addColumn('string', '');

			<?php $i = 1;?>
            data.addRows
            ([	
            	@foreach ($payments as $payment)
            	  [<?=$i++ ?>, 
            	  '<?= $payment->house;?>', 
            	  '<?= $payment->type;?>', 
            	  '<?= $payment->bank;?>', 
            	  '<?= $payment->confirmid;?>', 
            	  '<?= $payment->date;?>',
            	  '<?= $payment->realdate;?>',
            	  <?= $payment->amount;?>,
            	  '<?= $payment->state;?>',
            	  '<input type="checkbox" name="box<?= $payment->id?>" value="combo<?= $payment->id?>">'],
            	@endforeach     
            ]);

            var table = new google.visualization.Table(document.getElementById('table_div'));

            var options = {};
               options['showRowNumber'] = false;
               options['allowHtml'] = true;
            table.draw(data, options);
          }
      </script>
	{{Form::label('rechazar','Aprobar') }}   
   	{{Form::radio('status', 'aprove')}}
   	{{Form::label('rechazar','Rechazar') }} 
   	{{Form::radio('status', 'disaprove')}}
	{{Form::submit('Listo')}} 

{{ Form::close() }}

@stop