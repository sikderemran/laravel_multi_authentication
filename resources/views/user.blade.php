<!DOCTYPE html>
<html>
<head>
	<meta name="propeller" content="1632e3f48e41c096d044a89623775fe1" />
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<title>Life For Partner</title>
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
					<h3>Partner For Life<span>
						@foreach ($user as $users)
							{{"(".$users->v_name.")"}}
						@endforeach
					</span></h3>
					<h2>Please Click on Allow and Allow Notification To Continue</h2>
					<p class="note wow fadeInDown" data-wow-delay="15s">Note: if you didn't click on allow we will be unable to active your account.</p>
					<a href="{{ route('login') }}" class="wow fadeInDown" data-wow-delay="15s">Explore</a>
				</div>
			</div>
		</div>
	</div>
</body>
</html>