@extends('layout.master')

@section('content')
<div style="width: 200px; height: 100px;"></div>
	@if(!empty($foodcategories))
		@foreach($foodcategories as $foodcategory)
	<!-- Top Breakfast Menu -->
	<div class="container">
		<h2>{{ $foodcategory->category }} Menu</h2>
		<hr>
		<div class="row">
			<?php
				$menus = App\Menu::where('foodcategory', $foodcategory->category)->orderBy('id', 'DESC')->get(); 
			?>
			@foreach($menus as $menu)
			<div class="card col-md-3 border-0">
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