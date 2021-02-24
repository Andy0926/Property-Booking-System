@extends('layout')

@section('content')
	<!-- Navigation -->


	<!--- Image Slider -->
	<div id="slides" class="carousel slide mb-5" data-ride="carousel">
		<ul class="carousel-indicators">
			<li data-target="#slides" data-slide-to="0" class="active"></li>
			<li data-target="#slides" data-slide-to="1"></li>
			<li data-target="#slides" data-slide-to="2"></li>
		</ul>

		<div class="carousel-inner">
			<div class="carousel-item active">
				<img src="img/cons1.jpg">
				<div class="carousel-caption custom-position1">
					<div class="shadow-white">
					</div>
				</div>
				<div class="carousel-caption text-color custom-position1">
					<h1 class="display-2">UTAR</h1>
					<h3>We Build a Better Tomorrow</h3>
					{{-- <a href="{{route('register')}}"
						class="btn btn-outline-light btn-lg ">Edit</a>
					<button type="button" class="btn btn-outline-light btn-lg">Register</button> --}}
					<a href="{{route('property.index')}}" class="btn btn-primary btn-lg">View Projects</a>
				</div>

			</div>
			<div class="carousel-item">
				<img src="img/construction2.jpg">
				<div class="carousel-caption text-color custom-position2">
					<h1 class="display-4">We Established in 1997</h1>
				</div>
			</div>
			<div class="carousel-item">
				<img src="img/home-slider.jpeg">
				<div class="carousel-caption text-color custom-position2">
					<h1 class="display-4">We are Property Development Country</h1>
				</div>
			</div>
		</div>
	</div>


	<!--- Welcome Section -->

	<div class="container padding mb-5 ml-6 mr-6">
		<div class="row welcome text-center ">
			<div class="col-12">
				<h1 class="display-4">UTAR Group</h1>
			</div>
			<hr>
			<div class="col-12">
				<p class="lead">Lorem Ipsum is simply dummy text of the printing and typesetting industry. When an unknown printer took a galley of type and scrambled it. Lorem Ipsum is simply dummy text of the printing and typesetting industry. When an unknown printer took a galley of type and scrambled it</p>
			</div>
		</div>
	</div>

	<!--- Three Column Section -->
	<div class="container mb-0 ml-6 mr-6">
		<div class="people row text-center padding">
			<div class=" col-xs-12 col-sm-6 col-md-4">
				<img src="img/char1.png">
				<h3>Managing Director</h3>
				<p>Dato' Louis Chai Ming Foo</p>
			</div>
			<div class=" col-xs-12 col-sm-6 col-md-4">
				<img src="img/char1.png">
				<h3>Executive Director</h3>
				<p>Datin Seow An Nee</p>
			</div>
			<div class=" col-sm-12 col-md-4">
				<img src="img/char1.png">
				<h3>Executive Director</h3>
				<p>Mr. Ong Poh Huat</p>
			</div>
			
		</div>
		<hr class="mb-0">
	</div>

	<!--- Two Column Section -->

	<div class="container display-blue text-white mt-5 mb-5 ml-6 mr-6">
		<div class="row philosophy">
			<h2 class="mt-3 ">Our Philosophy</h2>
			<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. When an unknown printer took a galley of type and scrambled it. Lorem Ipsum is simply dummy text of the printing and typesetting industry. When an unknown printer took a galley of type and scrambled it.Lorem Ipsum is simply dummy text of the printing and typesetting industry. When an unknown printer took a galley of type and scrambled it</p>

		</div>
		<hr class="my-4">
	</div>


	<!--- Connect -->
	<div class="container-fluid padding">
		<div class="row text-center padding">
			<div class="col-12">
				<h2>Connect</h2>
			</div>
			<div class="col-12 social padding">
				<a href="#"><i class="fab fa-facebook"></i></a>
				<a href="#"><i class="fab fa-twitter"></i></a>
				<a href="#"><i class="fab fa-linkedin-in"> </i></a>
				<a href="#"><i class="fab fa-instagram"></i></a>
			</div>
		</div>
	</div>

	<!--- Footer -->
	@include('footer')

	@endsection