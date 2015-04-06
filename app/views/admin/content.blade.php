@extends('layouts.adminbase')
@section('content')

  {{Form::open(array('action' => 'AdminController@addcarousel','files'=>true)) }}
  {{ Form::label('file','File',array('id'=>'','class'=>'')) }}
  {{ Form::file('file','',array('id'=>'','class'=>'')) }}
  <br/>
  <!-- submit buttons -->
  {{ Form::submit('Save') }}
  
  <!-- reset buttons -->
  {{ Form::reset('Reset') }}
  
  {{ Form::close() }}

{{Form::open(array('action' => 'AdminController@managecarousel')) }}
     <div id="table_div"></div>


        <script type="text/javascript">
        google.load("visualization", "1", {packages:["table"]});
          google.setOnLoadCallback(drawTable);

          function drawTable() {
            var data = new google.visualization.DataTable();
   
            data.addColumn('number', '#');
            data.addColumn('string', 'Ruta del Archivo');
            data.addColumn('string', 'Nombre');
            data.addColumn('string', 'Estado');         
            data.addColumn('string', '');            

            data.addRows([
            <?php $i = 1;?>
              @foreach ($files as $file)
              [<?=$i++ ?>, 
              '<?= $file->path;?>',
              '<?= $file->name;?>', 
              '<?= $file->state;?>',
              '<input type="checkbox" name="box<?= $file->id?>"value="combo<?= $file->id?>">'],
            @endforeach   
              
            ]);

            var table = new google.visualization.Table(document.getElementById('table_div'));

            table.draw(data, {allowHtml: true});
          }
      </script>
    {{Form::label('rechazar','Agregar al Carrusel') }}   
    {{Form::radio('status', 'include')}}
    {{Form::label('rechazar','Sacar del Carrusel') }} 
    {{Form::radio('status', 'extend')}}
    {{Form::label('rechazar','Eliminar Imagen') }} 
    {{Form::radio('status', 'delete')}}    
  {{Form::submit('Listo')}} 

{{ Form::close() }}
   
@stop