@extends('layouts.adminbase')
@section('content')


        <div id="table_div"></div>


        <script type="text/javascript">
	    	google.load("visualization", "1", {packages:["table"]});
	      	google.setOnLoadCallback(drawTable);

	      	function drawTable() 
	      	{
	        	var data = new google.visualization.DataTable();
	 
            data.addColumn('number', '#');
            data.addColumn('string', 'Quinta');
            data.addColumn('string', 'Tipo de pago');
            data.addColumn('string', 'Banco');
            data.addColumn('string', 'Codigo de confirmación');
            data.addColumn('string', 'Fecha de pago');
            data.addColumn('string', 'Fecha de registro');
            data.addColumn('number', 'Monto');
            data.addColumn('string', 'Estado'); 


	        	data.addRows([
	        	<?php $i = 1;?>
          		@foreach ($results as $result)
					 [<?=$i++ ?>, '<?= $result->house;?>' , '<?= $result->type;?>', '<?= $result->bank;?>', '<?= $result->confirmid;?>', '<?= $result->date;?>','<?= $result->realdate;?>', <?= $result->amount;?>,'<?= $result->state;?>'],
	        	@endforeach   
	        	  
	        	]);

	        	var table = new google.visualization.Table(document.getElementById('table_div'));

	        	table.draw(data, {showRowNumber: false});
	      	}
	    </script>
   
@stop