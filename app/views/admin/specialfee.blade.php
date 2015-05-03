@extends('layouts.adminbase')
@section('content')

	<?if($aux == 'fee'): ?>
        <div id="table_div"></div>
        <script type="text/javascript">
	    	google.load("visualization", "1", {packages:["table"]});
	      	google.setOnLoadCallback(drawTable);

	      	function drawTable() 
	      	{
	        	var data = new google.visualization.DataTable();
	 			
	        	data.addColumn('number', '#');
	        	data.addColumn('string', 'Quinta');
	        	data.addColumn('string', 'Nombre');
	        	data.addColumn('string', 'Apellido');
	        	data.addColumn('string', 'Telefono');
	        	data.addColumn('string', 'Correo');
	        	data.addColumn('number', 'Balance');
	        	data.addColumn('number', 'Tarifa Especial');


	        	data.addRows([

	        	 [1, '<?= $fee->house;?>' , '<?= $fee->name;?>', '<?= $fee->last_name;?>', '<?= $fee->phone;?>', '<?= $fee->email;?>', <?= $fee->balance;?>,<?= $fee->value;?>],
	        	  
	        	]);
	        	var table = new google.visualization.Table(document.getElementById('table_div'));

	        	table.draw(data, {showRowNumber: false});
	      	}
	    </script>
  <row>     
	<div class="col-md-4">
	      {{Form::open(array( 'id' => 'delete_specialfee_form', 'action' => 'AdminController@deleteSpecialFee')) }}
		      <input class = "hidden" type="text" value="<?= $fee->house;?>" name="house"> 
		      
		      <a class="btn btn-danger" href="#confirmation">Eliminar Tarifa Especial</a> 
	      {{ Form::close() }}
	 </div>
	         
 </row>
 <script type="text/javascript">
 	$(document).ready(function(){
 		$('#btn_delete_specialfee').click(function(){
 			$('#delete_specialfee_form').submit();
 		});


 		$('#btn_cancel').click(function(){
 			$('#delete_popup').hide();
 			$('.remodal-overlay').hide();
 		});
 	});
 </script>

     <div id="delete_popup" class="remodal" data-remodal-id="confirmation">
        <h1>Aviso</h1>
        <p>
        La Tarifa Especial del usuario <?= $fee->name;?> va a ser eliminado de forma permanente 
        </p>
        <button type="button" class="btn btn-info" id="btn_delete_specialfee">Continuar</button>
        <br>
    </div>	
<? else: ?> 
    <div id="table_div"></div>
        <script type="text/javascript">
	    	google.load("visualization", "1", {packages:["table"]});
	      	google.setOnLoadCallback(drawTable);

	      	function drawTable() 
	      	{
	        	var data = new google.visualization.DataTable();
	 			
	        	data.addColumn('number', '#');
	        	data.addColumn('string', 'Quinta');
	        	data.addColumn('string', 'Nombre');
	        	data.addColumn('string', 'Apellido');
	        	data.addColumn('string', 'Telefono');
	        	data.addColumn('string', 'Correo');
	        	data.addColumn('number', 'Balance');

	        	data.addRows([

	        	 [1, '<?= $fee->house;?>' , '<?= $fee->name;?>', '<?= $fee->last_name;?>', '<?= $fee->phone;?>', '<?= $fee->email;?>', <?= $fee->balance;?>],
	        	  
	        	]);
	        	var table = new google.visualization.Table(document.getElementById('table_div'));

	        	table.draw(data, {showRowNumber: false});
	      	}
	    </script>
  <row>     
	<div class="col-md-4">
	      {{Form::open(array( 'id' => 'delete_specialfee_form', 'action' => 'AdminController@deleteSpecialFee')) }}
		      <input class = "hidden" type="text" value="<?= $fee->house;?>" name="house"> 
		      
		      <a class="btn btn-primary" href="#confirmation">Agregar Tarifa Especial</a> 
	      {{ Form::close() }}
	 </div>
	         
 </row>
 <script type="text/javascript">
 	$(document).ready(function(){
 		$('#btn_delete_specialfee').click(function(){
 			$('#delete_specialfee_form').submit();
 		});


 		$('#btn_cancel').click(function(){
 			$('#delete_popup').hide();
 			$('.remodal-overlay').hide();
 		});
 	});
 </script>

     <div id="delete_popup" class="remodal" data-remodal-id="confirmation">
        <h1>Aviso</h1>
        <p>
        La Tarifa Especial del usuario <?= $fee->name;?> va a ser eliminado de forma permanente 
        </p>
        <button type="button" class="btn btn-info" id="btn_delete_specialfee">Continuar</button>
        <br>
    </div>
<? endif ?>
@stop