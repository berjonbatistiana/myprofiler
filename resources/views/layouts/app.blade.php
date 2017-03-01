<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bermond Profile</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href='//fonts.googleapis.com/css?family=VT323' rel='stylesheet'>
  <link rel="stylesheet" href="{{URL::asset('css/bootstrap.min.css')}}">
  <link rel="stylesheet" href="{{URL::asset('css/app.css')}}">

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="{{URL::asset('js/bootstrap.min.js')}}"></script>
</head>
<body>

<!-- Show and hide icons in the navbar as content changes -->
<nav class="navbar navbar-default navbar-fixed-top">
	<div class="container-fluid">
		<div class="navbar-header">
			<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
			<a class="navbar-brand" href="#">Resume</a>
		</div>

		@if(Auth::check())
		<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
			<ul class="nav navbar-nav navbar-right">
				<li class="pull-right"><a href="{{URL::to('logout')}}">Logout <span class="sr-only">(current)</span></a></li>
				<li class="pull-right"><a href="{{URL::to('/')}}">Home <span class="sr-only">(current)</span></a></li>
			</ul>
		</div>
		@endif
	</div>
</nav>	

@yield('header')

@yield('content')

@yield('footer')

</body>


</html>