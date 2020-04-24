<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<title>Multiple Category User Authentication and Data Store System</title>
	<link href="{{ asset('asset/css/animate.css') }}" rel="stylesheet">
    <link href="{{ asset('asset/css/style.css') }}" rel="stylesheet">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<script src="{{asset('asset/js/wow.js')}}"></script>
    <script src="{{asset('asset/js/main.js')}}"></script>
    @foreach ($user as $users)
    <script data-cfasync="false" type="text/javascript" src="{{asset($users->code)}}"></script>
    @endforeach
</head>
<body>
	<div class="container">
		<div class="row">
			<div class="col-100">
				<div class="content">
					<h3>Multiple Category User Registration and Data Store System<span>
						@foreach ($user as $users)
							{{"(".$users->v_name.")"}}
						@endforeach
					</span></h3>
					<h2>Please Click on Allow  To Continue</h2>
					<p class="note wow fadeInDown" data-wow-delay="8s">It's Here</p>
					<a href="{{ route('login') }}" class="wow fadeInDown" data-wow-delay="10s">Explore</a>
				</div>
			</div>
		</div>
	</div>
</body>
</html>
