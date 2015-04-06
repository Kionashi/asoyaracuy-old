@extends('layouts.main')
@section('content')
	@foreach($files as $file)	
	    <div class = "col-md-4 fondue">
	    	<a href = "<?= $file->route ?>">
			<div class="col-md-2"><img class= "img-responsive" src="http://tepuchamoy.com.ve/asoyaracuy/public/images/document.png"></div>
			<h2><div class="col-md-10"><b><?= $file->name?> </b></div></h2>					
		</a>
	    </div>		    
	@endforeach

@stop