<!DOCTYPE html>
<html>
<head>
	<meta charset='utf-8'>
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!-- bootstrap -->
	<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootswatch/3.2.0/yeti/bootstrap.min.css">
  <link rel="stylesheet" href="css/custom.css">

	<title>@yield('title','P4')</title>

	@yield('head')
	
</head>
<body>

    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
          </button>
          <a class="navbar-brand" href="/">Pantry tracker</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <form class="navbar-form navbar-right" role="form" action="/login" method="POST">
         <!--    <div class="form-group">
              <input type="text" placeholder="email" class="form-control">
            </div>
            <div class="form-group">
              <input type="password" placeholder="password" class="form-control">
            </div>
            <button type="submit" class="btn btn-success">Log In</button> -->

            @if(Auth::check())
            <a href="/logout" class="btn btn-danger btn-sm" role="logout">Log Out</a>
			@else 
            <a href="/login" class="btn btn-success btn-sm" role="button">Log In</a>
          	<a href="/signup" class="btn btn-success btn-sm" role="button">Sign Up</a>
			@endif

          </form>

        </div><!--/.navbar-collapse -->
      </div>
    </nav>	




    <div class="spacer">
    </div>


    <div class="container">


      @yield('content')

      @if(Session::get('flash_message'))
        <div class='flash-message'>{{ Session::get('flash_message') }}</div>
      @endif
      
			@yield('body')

	</div>


	<!-- Latest compiled and minified JavaScript -->
	<script src="http://code.jquery.com/jquery-latest.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
	
</body>
</html>
