@extends('layouts.main')
@section('content')
    <div class="row">
        <div class="col-md-12">
        	<h1>Consultas / Encuestas</h1>
			    @foreach ($polls as $poll)
			    <iframe src="<?=$poll->url?>" frameborder=0 width="400px" height="680px"></iframe>
			    @endforeach                                                                                   
        </div>
    </div>
@stop