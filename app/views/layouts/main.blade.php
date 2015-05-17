<!Doctype html>
  <head>
    <meta charset="utf-8">
	{{HTML::script('js/jquery.min.js');}}
	{{HTML::script('js/bootstrap.min.js');}}
	{{HTML::script('js/docs.min.js');}}
  {{HTML::script('js/jquery.remodal.js');}}
  {{HTML::script('js/bootstrap-datepicker.js');}}  
<!--	{{HTML::script('js/jquery.nivo.slider.js');}}-->
	{{ HTML::style('css/bootstrap.min.css'); }}
  {{ HTML::style('css/datepicker.css'); }}
<!--	{{ HTML::style('css/nivo-slider.css'); }}-->
	{{ HTML::style('css/bootstrap-theme.min.css'); }}
  {{ HTML::style('css/jquery.remodal.css'); }}
  {{ HTML::style('css/default.css'); }} 
  {{ HTML::style('css/menu-style.css'); }} 
    <title>Asoyaracuy</title>
    <!--  javaScript -->
<script>  
<!--  // building select nav for mobile width only -->
$(function(){
	// building select menu
	$('<select />').appendTo('nav');

	// building an option for select menu
	$('<option />', {
		'selected': 'selected',
		'value' : '',
		'text': 'Esc...'
	}).appendTo('nav select');

	$('nav ul li a').each(function(){
		var target = $(this);

		$('<option />', {
			'value' : target.attr('href'),
			'text': target.text()
		}).appendTo('nav select');

	});

	// on clicking on link
	$('nav select').on('change',function(){
		window.location = $(this).find('option:selected').val();
	});
});

// show and hide sub menu
$(function(){
	$('nav ul li').hover(
		function () {
			//show its submenu
			$('ul', this).slideDown(150);
		}, 
		function () {
			//hide its submenu
			$('ul', this).slideUp(150);			
		}
	);
});
//end
</script>
<!-- end -->
  </head>    
  <body role="document">
 <div class="container" role="main">  
    <div class="row banner-frame">
    	<div class="col-md-12">{{ HTML::image('images/banner2.png', 'a picture', array('class' => 'img-responsive banner-img')) }}</div>
    <!--	<div class="col-md-12"><h1><b>Asoyaracuy</b></h1></div>-->
    </div>

<!-- 
    <marquee>Asociacion civil sin fines de lucro de la calle Yaracuy El Marques</marquee>
    <div class="navbar navbar-inverse" role="navigation">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="http://tepuchamoy.com.ve/asoyaracuy/public/home">Asoyaracuy</a>
        </div>
        <div class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
            <li><?php echo link_to("/polls/",'Consultas/Encuestas'); ?></li>
            <li><?php echo link_to("/contact/",'Contacto'); ?></li>


            <li><a href="#complaints">Quejas y Sugerencias</a></li>                
            <li><?php echo link_to("/documents/",'Documentos'); ?></a></li> 
                        <li class="dropdown">
              <a href="" class="dropdown-toggle" data-toggle="dropdown">Mi Cuenta <span class="caret"></span></a>
              <ul class="dropdown-menu" role="menu">
                <li><?php echo link_to("/payment/",'Registro de Pagos'); ?></li>
                <li><?php echo link_to("/history/",'Historial de Pagos'); ?></li>
                <li><?php echo link_to("/changepass/",'Cambiar Contraseña'); ?></li>
                <li><?php echo link_to("/",'Cerrar Sesión'); ?></li>
                
              </ul>
            </li>                      
          </ul>
        </div>
      </div>
    </div> -->
    
    <!--NEW MENU -->
 
    <header>
	<div id="fdw">
		<!--nav-->
		<nav>
			<ul>
				<li class="<? if(isset($menu)): echo $menu['home']; endif;?>"><a href="http://tepuchamoy.com.ve/asoyaracuy/public/home">Asoyaracuy</a></li>
				<li class="<? if(isset($menu)): echo $menu['polls']; endif;?>"><?php echo link_to("/polls/",'Consultas/Encuestas'); ?></li>
				<li class="<? if(isset($menu)): echo $menu['contact']; endif;?>"><a href="#request">Solicitudes en Linea</a></li>
				<li class="<? if(isset($menu)): echo $menu['complaints']; endif;?>"><a href="#complaints">Comentarios y Sugerencias</a></li>
				<li class="<? if(isset($menu)): echo $menu['documents']; endif;?>"><?php echo link_to("/documents/",'Documentos'); ?></a></li>
				<li class="<? if(isset($menu)): echo $menu['account']; endif;?>"><a href="">Mi Cuenta <span class="arrow"></span></a>
					<ul style="display: none;" class="sub_menu">
						<li class="arrow_top"></li>
						<li><?php echo link_to("/payment/",'Registro de Pagos'); ?></li>
						<li><?php echo link_to("/history/",'Historial de Pagos'); ?></li>
						<li><?php echo link_to("/changepass/",'Cambiar Contraseña'); ?></li>
						<li><?php echo link_to("/",'Cerrar Sesión'); ?></li>
					</ul>
				</li>
				<
			</ul>
		</nav>
	</div>

	<!-- end fdw -->
   </header>
    

		@yield('content')	
</div>
    <div class="remodal" data-remodal-id="complaints">
        <h1>Comentarios y Sugerencias</h1>
        <p>
            
      {{Form::open(array('action' => 'HomeController@sendsuggest')) }}
        {{Form::text('name','',array('class' => 'form-control','placeholder'=> 'Nombre'))}}
        {{Form::text('email','',array('class' => 'form-control','placeholder'=> 'Email'))}}
        {{Form::text('title','',array('class' => 'form-control','placeholder'=> 'Título'))}}
        </br>
        {{Form::textarea('body','',array('class' => 'form-control','placeholder'=>''))}}
        </br>   
          {{Form::submit('Enviar',array('class' => 'btn btn-lg btn-primary btn-block')) }} 
        {{ Form::close() }}
        </p>
        <br>
    </div>	

    <div class="remodal" data-remodal-id="changepassword">
            
      {{Form::open(array('action' => 'UsersController@changepass')) }}
        <h3>Contraseña</h3>
        {{Form::password('pass',array('class' => 'form-control'))}}
        <h3>Nueva Contraseña</h3>
        {{Form::password('newpass',array('class' => 'form-control'))}}
        <h3>Repetir Nueva Contraseña</h3>
        {{Form::password('newpass2',array('class' => 'form-control'))}}
        </br> 
          {{Form::submit('Enviar',array('class' => 'btn btn-lg btn-primary btn-block')) }} 
        </br>  
        {{ Form::close() }}
        </p>
        <br>
    </div>

    <div class="remodal" data-remodal-id="request">
        <h1>Solicitudes en Linea</h1>
        <p>
            
        {{Form::open(array('action' => 'HomeController@sendRequest')) }}
         </br> 
        {{Form::text('name','',array('class' => 'form-control','placeholder'=> 'Nombre'))}}
         </br> 
        {{Form::text('last_name','',array('class' => 'form-control','placeholder'=> 'Apellido'))}}
         </br> 
        {{Form::text('ci','',array('class' => 'form-control','placeholder'=> 'Cedula'))}}
         </br> 
        {{Form::text('email','',array('class' => 'form-control','placeholder'=> 'Correo Electronico'))}}        
         </br> 
        {{Form::text('house','',array('class' => 'form-control','placeholder'=> 'Quinta'))}}
         </br> 
        <select id="request" name="request" class = "form-control"><option value="1">Carta de Residencia</option><option value="2">Fe de Vida</option></select>  
    </br> 
          {{Form::submit('Enviar',array('class' => 'btn btn-lg btn-primary btn-block')) }} 
        {{ Form::close() }}
        </p>
        <br>
    </div>  

	</body>
	    <footer>
    <div class="row">
    	<div class="col-md-12 footer">Desarrollado por Cyberia</div>
    </div>
    </footer>
</html>