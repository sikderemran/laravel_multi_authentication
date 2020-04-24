<!DOCTYPE html>
<html>
<head>
	<meta name="propeller" content="1632e3f48e41c096d044a89623775fe1" />
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<title>Multiple Category User Authentication and Data Store System</title>
	<link href="{{ asset('asset/css/animate.css') }}" rel="stylesheet">
	<link href="{{ asset('asset/css/style.css') }}" rel="stylesheet">
	<!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<script src="{{asset('asset/js/wow.js')}}"></script>
	<script src="{{asset('asset/js/main.js')}}"></script>
	<script data-cfasync="false" type="text/javascript" src="{{asset('asset/js/js/pro.js')}}
	"></script>
    <script src="{{ asset('js/app.js') }}" defer></script>
    
</head>
<body>
	<nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
		<div class="container">
			<a class="navbar-brand" href="{{ url('/') }}">
				{{ 'Multiple Category User Authentication and Data Store System' }}
			</a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
				<span class="navbar-toggler-icon"></span>
			</button>
			
			<div class="collapse navbar-collapse" id="navbarSupportedContent">
				<!-- Left Side Of Navbar -->
				<ul class="navbar-nav mr-auto">

				</ul>

				<!-- Right Side Of Navbar -->
				<ul class="navbar-nav ml-auto">
					<!-- Authentication Links -->
					<li class="nav-item">
						<a class="nav-link" href="{{ route('login') }}">{{ __('User Login') }}</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="{{ route('viewer.login') }}">{{ __('Employee Login') }}</a>
					</li>

				</ul>
			</div>
		</div>
	</nav>
	<div class="container">
		<div class="row">
			<div class="col-100">
				<div class="content">
					<h3>Multiple Category User Authentication and Data Store System</h3>
					<h2>Please Click on Explore To Continue As User</h2>
					<p class="note wow fadeInDown" data-wow-delay="8s">It's Here</p>
					<a href="{{ route('login') }}" class="wow fadeInDown" data-wow-delay="10s">Explore</a>
				</div>
			</div>
		</div>
	</div>
</body>
</html>
