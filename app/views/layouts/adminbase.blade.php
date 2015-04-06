<!Doctype html>
  <head>
    <meta charset="utf-8">
  {{HTML::script('js/jquery.min.js');}}
  {{HTML::script('js/bootstrap.min.js');}}
  {{HTML::script('js/docs.min.js');}}
  {{HTML::script('js/bootstrap-datepicker.js');}} 
    {{HTML::script('js/jquery.remodal.js');}} 
  <script type="text/javascript" src="https://www.google.com/jsapi"></script>

<!--  {{HTML::script('js/jquery.nivo.slider.js');}}-->
  {{ HTML::style('css/bootstrap.min.css'); }}
  {{ HTML::style('css/datepicker.css'); }}
<!--  {{ HTML::style('css/nivo-slider.css'); }}-->
  {{ HTML::style('css/bootstrap-theme.min.css'); }}
    {{ HTML::style('css/default.css'); }} 
      {{ HTML::style('css/jquery.remodal.css'); }}
    <title>Administración Asoyaracuy</title>
  </head>    
  <body>
      <div class="row banner">
      <div class="col-md-12">{{ HTML::image('images/bannergreen.png') }}</div>
    <!--  <div class="col-md-12"><h1><b>Asoyaracuy</b></h1></div>-->
    </div>
<div class="navbar navbar-inverse" role="navigation">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="http://localhost/AsoYaracuy2/public/admin/home">Asoyaracuy</a>
        </div>
        <div class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
            <li class ="<?=$menu['admin_users']?>"><?php echo link_to("/admin/users",'Administrar Usuarios'); ?></li>
            <li class="dropdown <?=$menu['admin_payments']?>">
              <a href="" class="dropdown-toggle" data-toggle="dropdown">Administrar Pagos <span class="caret"></span></a>
              <ul class="dropdown-menu" role="menu">
                <li><?php echo link_to("/admin/payments/",'Pagos pendientes'); ?></li>
                <li><?php echo link_to("/admin/paymenthistory/",'Historial de Pagos'); ?></li>
                <li><?php echo link_to("/admin/fee/",'Gestionar Mensualidad'); ?></li>
              </ul>
            </li>
            <li class="dropdown <?=$menu['admin_content']?>">
              <a href="" class="dropdown-toggle" data-toggle="dropdown">Administrar Contenido <span class="caret"></span></a>
              <ul class="dropdown-menu" role="menu">
                <li><?php echo link_to("/admin/content/",'Carrusel'); ?></li>
                <li><?php echo link_to("/admin/documents/",'Documentos'); ?></li>
                <li><?php echo link_to("/admin/members/",'Contacto'); ?></li>

              </ul>
            </li>     
            <li class="<?=$menu['privates_documents']?>"><?php echo link_to("/admin/private",'Documentos Privados'); ?></li>       
            <li><?php echo link_to("/",'Cerrar Sesión'); ?></li>              
          </ul>
        </div><!--/.nav-collapse -->
      </div>
</div>
		@yield('content')		
	</body>
</html>
