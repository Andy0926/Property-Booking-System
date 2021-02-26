<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>UTAR</title>
	<link rel="shortcut icon" href="{{ asset("img/UTAR_Logo.ico") }}"/>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
	<script src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>
	<link href="{{mix('css/app.css')}}" rel="stylesheet">
</head>

<body>

	<nav class="navbar navbar-expand-lg navbar-light bg-light  shadow-green font-weight-bold">
		<div class="container-fluid">
			<a class="navbar-brand" href="{{ route('home')}}"><img src="{{ asset("img/UTAR_Logo.jpg") }}" alt="Home"
					class="navbar-logo"></a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup"
				aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="navbarNavAltMarkup">
				<ul class="navbar-nav ml-auto">
					<li class="nav-item">
						<a class="nav-link" href="{{ route('home')}}">Home</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="{{ route('property.index')}}">Project</a>
					</li>
					@if (Route::has('login'))
						@auth
							@if(Auth::user()->utype==='ADM')
							<li class="nav-item">
								<a class="nav-link" href="{{ route('property.create')}}">Add Property</a>
							</li>
							@endif
						@endif
					@endif

					{{-- <li class="nav-item">
						<a class="nav-link" href="csr.html">CSR</a>
					</li> --}}
					<li class="nav-item">
						<a class="nav-link" href="{{ route('aboutUs')}}">About Us</a>
					</li>
					@guest
					<li class="nav-item">
						<a class="nav-link" href="{{ route('register')}}">Register</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="{{ route('login')}}">Login</a>
					</li>
					@else
					<li class="nav-item">
						<a class="nav-link" href="{{ route('logout')}}"
							onclick="event.preventDefault();document.getElementById('logout-form').submit();">Logout ({{Auth::user()->name}})</a>
						<form action="{{route('logout')}}" method="POST" id="logout-form" style="display: none">
							@csrf
						</form>
					</li>

					@endguest
				</ul>
			</div>
		</div>
	</nav>


	@yield('content')
</body>

</html>