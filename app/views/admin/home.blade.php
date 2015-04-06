@extends('layouts.adminbase')
@section('content')
  <div class = "error-msg" style="color:red;">
      <?if(isset($response)):?>
        <?=$response ?>
      <?endif; ?>
  </div>
<h1>Bienvenido al Panel de Administración!</h1>

@stop