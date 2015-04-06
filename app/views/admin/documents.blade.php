@extends('layouts.adminbase')
@section('content')

<row>


<div class="col-md-5"><h1>Registrar enlaces de descarga</h1>
    {{Form::open(array('action' => 'AdminController@addDocumentByLink')) }}       
      {{Form::text('url', null, ['class' => 'form-control','placeholder' => 'Direccion del enlace']) }}<br/>
      {{Form::text('name', null, ['class' => 'form-control','placeholder' => 'Nombre del archivo']) }} <br/>
      <select id="category" name="category" class = "form-control">
      <option value="meetings">Actas de Asamblea</option>
      <option value="organization">Organizacion de la Asociacion</option>
      <option value="intercom">Intercomunicador</option>
      <option value="documents">Documentos de la Asociacion</option>
      <option value="contracts">Contratos de Servicios</option>
      <option value="info">Boletin Informativo</option>
      <option value="members">Asociados</option>
      <option value="gallery">Galeria de fotos</option></select>
      <br/>{{ Form::submit('Guardar') }}
{{ Form::close() }}
 </div>
<div class="col-md-7">
{{Form::open(array('action' => 'AdminController@manageDocuments')) }}
     <div id="table_div"></div></row>


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
              '<?= $file->route;?>',
              '<?= $file->name;?>', 
              '<?= $file->state;?>',
              '<input type="checkbox" name="box<?= $file->id?>"value="combo<?= $file->id?>">'],
            @endforeach   
              
            ]);

            var table = new google.visualization.Table(document.getElementById('table_div'));

            table.draw(data, {allowHtml: true});
          }
      </script>
    {{Form::label('rechazar','Volver Privado') }}   
    {{Form::radio('status', 'private')}}
    {{Form::label('rechazar','Volver Público') }} 
    {{Form::radio('status', 'publico')}}
    {{Form::label('rechazar','Eliminar Documento') }} 
    {{Form::radio('status', 'delete')}}    
  {{Form::submit('Listo')}} 

{{ Form::close() }}
 </div>
 </row>
@stop