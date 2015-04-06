<!doctype html>
<html>
<head>
    <meta charset="utf-8" />
      {{HTML::script('js/jquery.min.js');}}
    <title>Demo</title>
</head>
<body>
<a href="http:://www.jquery.com">Link</a>
<style>
#test {
    font-weight: bold;
}
</style>


    <script>
 
    window.onload = function() 
    {
    	alert( "welcome" );
	}
$( document ).ready(function() {
 
    $( "a" ).click(function(event) {
     event.preventDefault();
 
    $( this ).hide( "slow" );
    });
 
});



 
    </script>
</body>
</html>