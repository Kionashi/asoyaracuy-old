@extends('layouts.adminbase')
@section('content')
    <row>
      <div class="col-md-4">
          {{Form::open(array('action' => 'AdminController@addMember','files'=>true)) }}
          {{ Form::label('file','Agregar Imagen',array('id'=>'','class'=>'')) }}
          {{ Form::file('file','',array('id'=>'','class'=>'')) }}
          <br/>
          {{Form::text('name','',array('class' => 'form-control','placeholder'=> 'Nombre'))}}
          {{Form::text('group','',array('class' => 'form-control','placeholder'=> 'Cargo'))}}
          {{Form::text('email','',array('class' => 'form-control','placeholder'=> 'Correo'))}}  
          {{Form::textarea('description','',array('class' => 'form-control','placeholder'=>''))}}
          <!-- submit buttons -->
          {{ Form::submit('Guardar') }}          
          <!-- reset buttons -->
          {{ Form::reset('Reset') }}          
          {{ Form::close() }}
      </div>
      <div class="col-md-8">
      {{Form::open(array('action' => 'AdminController@searchMembers')) }}
        {{Form::label('search','Buscar') }} 
        {{Form::text('busqueda')}} 
      {{ Form::close() }}
         {{Form::open(array('action' => 'AdminController@manageMembers')) }}
     <div id="table_div"></div>

        <script type="text/javascript">
        google.load("visualization", "1", {packages:["table"]});
          google.setOnLoadCallback(drawTable);

          function drawTable() {
            var data = new google.visualization.DataTable();
   
            data.addColumn('number', '#');
            data.addColumn('string', 'Nombre');
            data.addColumn('string', 'Correo');
            data.addColumn('string', 'Grupo');                     
            data.addColumn('string', '');
            data.addRows([
            <?php $i = 1;?>
              @foreach ($members as $member)
              [<?=$i++ ?>, 
              '<?= $member->name;?>',
              '<?= $member->email;?>', 
              '<?= $member->group;?>',
              '<input type="checkbox" name="box<?= $member->id?>"value="combo<?= $member->id?>">'],
            @endforeach   
              
            ]);

            var table = new google.visualization.Table(document.getElementById('table_div'));

            table.draw(data, {allowHtml: true});
          }
      </script>
    {{Form::label('members','Eliminar Seleccionados') }}   
    {{Form::radio('status', 'delete')}}
    
  {{Form::submit('Listo')}} 

{{ Form::close() }}
      </div>
    </row>  
@stop