@extends('layouts.adminbase')
@section('content')
	@foreach($files as $file)	
	    <div class = "row fondue">
			<h3><div class="col-md-12"><b><?php echo link_to($file->route,$file->name)?> </b></div></h3>					
		</div>		    
	@endforeach

@stop