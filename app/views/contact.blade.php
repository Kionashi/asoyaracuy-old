@extends('layouts.main')
@section('content')
	@foreach($members as $member)	
	    <div class = "row fondue">
				<h3><div class="col-md-12"><b><?=$member->name ?></b></div></h3>	
		    	<div class = "row">
		    	<div class="col-md-2"> <img src="<?=$member->path ?>" alt="Image" class = "contact-img img-thumbnail img-responsive"></div>
		    	<div class="col-md-5"><?=$member->description ?></div>
				<div class="col-md-5"><?=$member->email ?></div>
				</div>
		</div>	
	    
	@endforeach

@stop