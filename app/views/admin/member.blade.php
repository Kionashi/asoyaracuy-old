@extends('layouts.adminbase')
@section('content')


        <div id="table_div"></div>


        <script type="text/javascript">
	    	google.load("visualization", "1", {packages:["table"]});
	      	google.setOnLoadCallback(drawTable);

	      	function drawTable() 
	      	{
	        	var data = new google.visualization.DataTable();
	 
	        	data.addColumn('string', 'Nombre');
	        	data.addColumn('string', 'Correo');
	        	data.addColumn('string', 'Grupo');

	        	data.addRows([ 
	        	 
	        	  ['<?= $member->name;?>' , '<?= $member->email;?>', '<?= $member->group;?>'],     	  
	        	]);

	        	var table = new google.visualization.Table(document.getElementById('table_div'));

	        	table.draw(data, {showRowNumber: false});
	      	}
	    </script>
   
      {{Form::open(array('action' => 'AdminController@deleteMember')) }}
      <input class = "hidden" type="text" value="<?= $member->group;?>" name="group"> 
      {{Form::submit('Eliminar Miembro') }} 
      {{ Form::close() }}
@stop