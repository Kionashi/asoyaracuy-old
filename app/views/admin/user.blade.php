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
	        	data.addColumn('string', 'Nombre');
	        	data.addColumn('string', 'Apellido');
	        	data.addColumn('string', 'Telefono');
	        	data.addColumn('string', 'Correo');
	        	data.addColumn('number', 'Balance');
	        	data.addColumn('number', 'Tarifa Especial');


	        	data.addRows([
	        	<?php $i = 1;?>
          		@foreach ($fee as $fee)
	        	  [<?=$i++ ?>, '<?= $fee->house;?>' , '<?= $fee->name;?>', '<?= $fee->last_name;?>', '<?= $fee->phone;?>', '<?= $fee->email;?>', <?= $fee->balance;?>, <?= $fee->value;?>],
	        	@endforeach   
	        	  
	        	]);

	        	var table = new google.visualization.Table(document.getElementById('table_div'));

	        	table.draw(data, {showRowNumber: false});
	      	}
	    </script>
  <row>     
	<div class="col-md-4">
	      {{Form::open(array( 'id' => 'delete_user_form', 'action' => 'AdminController@deleteUser')) }}
		      <input class = "hidden" type="text" value="<?= $fee->house;?>" name="house"> 
		      
		      <a class="btn btn-danger" href="#confirmation">Eliminar Usuario</a> 
	      {{ Form::close() }}
	 </div>
	         
 </row>
 <script type="text/javascript">
 	$(document).ready(function(){
 		$('#btn_delete_user').click(function(){
 			$('#delete_user_form').submit();
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
        El Usuario <?= $fee->name;?> va a ser eliminado de forma permanente 
        </p>
        <button type="button" class="btn btn-info" id="btn_delete_user">Continuar</button>
        <a href="http://asoyaracuy.tepuchamoy.com.ve/admin/users"><button type="button" class="btn btn-warning">Cancelar</button></a>
        <br>
    </div>	
@stop