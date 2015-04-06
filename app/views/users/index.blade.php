<!Doctype html>
  <head>
    <meta charset="utf-8">
	{{HTML::script('js/jquery.min.js');}}
	{{HTML::script('js/bootstrap.min.js');}}
	{{HTML::script('js/docs.min.js');}}
<!--	{{HTML::script('js/jquery.nivo.slider.js');}}-->
	{{ HTML::style('css/bootstrap.min.css'); }}
<!--	{{ HTML::style('css/nivo-slider.css'); }}-->
	{{ HTML::style('css/bootstrap-theme.min.css'); }}
    {{ HTML::style('css/default.css'); }} 
    <title>Usuarios</title>
  </head>    
  <body>
    <h1>Todos los Usuarios</h1>	
    @foreach ($users as $user)
      <li>{{link_to("/users/{$user->email}",$user->email)}}</li>>
    @endforeach
	</body>
</html>
