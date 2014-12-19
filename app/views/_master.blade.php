<!DOCTYPE html>
<html>
<head>
	<meta charset='utf-8'>
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!-- bootstrap -->
	<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootswatch/3.2.0/united/bootstrap.min.css">

	<title>@yield('title','P4')</title>

	@yield('head')
	
</head>
<body>
  	<div class="container">


        	@yield('content')
			@yield('body')

	</div>


	<!-- Latest compiled and minified JavaScript -->
	<script src="http://code.jquery.com/jquery-latest.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
	
</body>
</html>
