@extends('layouts.adminbase')
@section('content')
    <div class = "error-msg" style="color:red;">
        <?if(isset($response)):?>
            <?=$response ?>
        <?endif; ?>
    </div>
<h2>Lista de Usuarios con Tarifas especiales</h2>
    {{Form::open(array('action' => 'AdminController@searchSpecialFeeUsers')) }}
    {{Form::label('search','Buscar') }} 
    {{Form::text('busqueda')}} 
    {{ Form::close() }}

    <div id="table_div"></div>

    <script type="text/javascript">
        google.load("visualization", "1", {packages:["table"]});
          google.setOnLoadCallback(drawTable);

          function drawTable() {
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
        <?if($users != NULL):?>        
            <?php $i = 1;?> 
            <?foreach($users as $user): ?>
                <?if(isset($user->value)):?>
                    [<?=$i++ ?>, '<?= $user->house;?>' , '<?= $user->name;?>', '<?= $user->last_name;?>', '<?= $user->phone;?>', '<?= $user->email;?>', <?= $user->balance;?>,<?= $user->value;?>],
                <?endif; ?>
            <? endforeach; ?>   
        <?endif; ?>      
            ]);

            var table = new google.visualization.Table(document.getElementById('table_div'));

            table.draw(data, {showRowNumber: false});
          }
      </script>

    {{Form::open(array('action' => 'UsersController@showRegister')) }} 
    {{Form::submit('Crear nuevo usuario') }} 
    {{ Form::close() }}
   

@stop