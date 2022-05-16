@extends('layout/master')


@section('content')

	<!-- Slider -->
	<div class="container" style="height: 500px; margin-bottom: 50px;">
		<div id="sliderCarousel" class="carousel slide" data-ride="carousel">
			<ol class="carousel-indicators">
				<li data-target="#sliderCarousel" data-slide-to="0" class="active"></li>
				<li data-target="#sliderCarousel" data-slide-to="1"></li>
				<li data-target="#sliderCarousel" data-slide-to="2"></li>
			</ol>
			<div class="carousel-inner">
				<div class="carousel-item active">
					<img src="img/beefstack.jpg" class="d-block w-100
					" alt="..." style="width: 100%; height: 550px!important;">
					<div class="carousel-caption d-none d-block bg-danger mb-5" style="opacity: 0.7;">
						<h3>Beef Stack</h3>
						<p>Nulla vitae elit libero, a pharetra augue mollis interdum.</p>
					</div>
				</div>
				<div class="carousel-item">
					<img src="img/pizza.jpg" class="d-block w-100" alt="..." style="width: 100%; height: 550px!important;">
					<div class="carousel-caption d-block bg-warning mb-5" style="opacity: 0.7;">
						<h3>Pizza</h3>
						<p>Nulla vitae elit libero, a pharetra augue mollis interdum.</p>
					</div>
				</div>
				<div class="carousel-item">
					<img src="img/nuduls.jpg" class="d-block" alt="..." style="width: 100%; height: 550px!important;">
					<div class="carousel-caption d-none d-block bg-success mb-5" style="opacity: 0.7;">
						<h3>Nuduls</h3>
						<p>Nulla vitae elit libero, a pharetra augue mollis interdum.</p>
					</div>
				</div>
			</div>
			<a class="carousel-control-prev" href="#sliderCarousel" role="button" data-slide="prev">
				<span class="carousel-control-prev-icon" aria-hidden="true"></span>
				<span class="sr-only">Previous</span>
			</a>
			<a class="carousel-control-next" href="#sliderCarousel" role="button" data-slide="next">
				<span class="carousel-control-next-icon" aria-hidden="true"></span>
				<span class="sr-only">Next</span>
			</a>
		</div>
	</div>


	<!-- Order and Reservation Form -->
	<div class="container">
		<div class="row" style="margin-top: 70px; margin-bottom: 30px;">
			<div class="col-6">
				<div class="card" style="box-shadow: 0px 0px 10px 10px #ccc;">
					<h3 class="card-header text-center">Food Order</h3>
					<div class="card-body text-center p-3">
						<h1 class="display-1"><i class="far fa-user"></i></h1>
						<h4>We serve you the best food.</h4>
						<h5>at the time you want</h5>
						<p>You can Reserve a table by clicking the following button.</p>
						<a href="{{url('/order')}}" class="btn btn-info my-1">Order Your Food</a>			
					</div>
				</div>
			</div>
			<div class="col-6">
				<div class="card" style="box-shadow: 0px 0px 10px 10px #ccc;">
					<h3 class="card-header text-center">Table Reservation</h3>
					<div class="card-body text-center p-3">
						<h1 class="display-1"><i class="far fa-clock"></i></h1>
						<h4>We serve you the best food.</h4>
						<h5>at the time you want</h5>
						<p>You can Reserve a table by clicking the following button.</p>
						<a href="{{url('/reservation')}}" class="btn btn-info my-1">Choose Your Table</a>			
					</div>
				</div>
			</div>
		</div>
	</div>

	@if(!empty($foodcategories))
		@foreach($foodcategories as $foodcategory)
	<!-- Top Breakfast Menu -->
	<div class="container">
		<h2>{{ $foodcategory->category }} Menu</h2>
		<hr>
		<div class="card-deck">
			<?php
				$menus = App\Menu::where('foodcategory', $foodcategory->category)->orderBy('id', 'DESC')->limit(4)->get(); 
			?>
			@foreach($menus as $menu)
			<div class="card border-0">
				<div class="card-img-wrap">
					<img src="{{asset('')}}img/{{ $menu->foodimage }}" class="card-img-top" alt="..." height="155">
				</div>
				<div class="card-body">
					<div class="clearfix">
						<h4 class="card-title float-left">{{ $menu->foodname }}</h4>
						<p class="card-text float-right border p-2 bg-success text-white rounded">Price: <i>&#2547; {{ $menu->foodprice }}</i></p>
					</div>
					<small class="card-text text-muted">{{ $menu->fooddetails }}</small>
				</div>
			</div>
			@endforeach
		</div>
	</div>
		@endforeach
	@endif



@endsection