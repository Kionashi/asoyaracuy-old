@extends('layouts.main')
@section('content')


  <div class = "error-msg" style="color:green;">
      <?if(isset($response)):?>
        <?=$response ?>
      <?endif; ?>
  </div>
      <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
          <li data-target="#carousel-example-generic" data-slide-to="1"></li>
          <li data-target="#carousel-example-generic" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
        <?php $first=true;?>
        @foreach($files as $file)
          <?php if($first):?>
          <?php $first=false;?>
          <div class="item active">
            <img src="<?=$file->path ?>" alt="Image">
          </div>
          <?php else:?>
          <div class="item">
            <img src="<?=$file->path ?>" alt="Image"> 
          </div>
          <?php endif;?>
        @endforeach;
        </div>
        <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
          <span class="glyphicon glyphicon-chevron-left"></span>
        </a>
        <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
          <span class="glyphicon glyphicon-chevron-right"></span>
        </a>
     

@stop