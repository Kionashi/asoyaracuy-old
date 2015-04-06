<!doctype html>
<html>
  <head><meta http-equiv="Content-Type" content="text/html; charset=euc-jp">
    
    {{HTML::script('js/jquery.min.js');}}
    {{HTML::script('js/bootstrap.min.js');}}
    {{HTML::script('js/docs.min.js');}}
    <!--	{{HTML::script('js/jquery.nivo.slider.js');}}-->
    {{ HTML::style('css/bootstrap.min.css'); }}
    <!--	{{ HTML::style('css/nivo-slider.css'); }}-->
    {{ HTML::style('css/bootstrap-theme.min.css'); }}
    {{ HTML::style('css/default.css'); }}
    <title>Asoyaracuy</title>
  </head>
  <body>    
      	<row><div class="col-md-2"></div><div class="col-md-8"><img class= "img-responsive banner-img" src="http://tepuchamoy.com.ve/asoyaracuy/public/images/banner2.png">    <marquee>Asociacion civil sin fines de lucro de la calle Yaracuy El Marques</marquee>
</div><div class="col-md-2"></div></row>

    <row><div class="col-md-4"></div>
      <div class="col-md-4">
        <div class="jumbotron">
          <h2>Ingresar</h2>
          </br>
          {{Form::open(['route' => 'sessions.store'])}}
          <input class="form-control" name="house" type="text" placeholder="Quinta"></br>    
          <input class="form-control" name="password" type="password" placeholder="Contraseña"> </br>    
          {{Form::submit('Ingresar',array('class' => 'btn btn-lg btn-primary btn-block')) }}</br> 
          {{ Form::close() }}
        </div>
      </div>
      <div class="col-md-4"></div>
    </row>
    <row>
    </br></br></br></br></br></br></br></br></br></br></br></br></br>
  </body>
</html>