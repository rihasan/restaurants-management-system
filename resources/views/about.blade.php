@extends('layout.master')

@section('content')
<!-- ABOUT US AREA -->
<div class="container" style="margin-top: 100px;">
	<div class="row mb-3">
		<div class="col-4"></div>
		<div class="col-4 border-bottom border-info">
			<h2 class="text-center">ABOUT US</h2>
		</div>
		<div class="col-4"></div>
	</div>
	<div class="row">
		<div class="col-6">
			<div class="card" style="border: 0px;">
			  <div class="card-body">
			    <h3 class="card-title">Our Story</h3>
			    <p class="card-text text-justify">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
			  </div>
			</div>
		</div>
		<div class="col-6">
			<div class="card">
			  <img src="img/chicken.jpg" class="card-img-top" alt="...">
			</div>
		</div>
	</div>
</div>


<!-- Amount of Summary -->
<div class="container-fluid my-3 p-0" style="background: url(img/aboutUsSummary.jpg) no-repeat center center/cover; background-attachment: fixed;">
	<div class="overlay">
		<div class="container py-3">
				<div class="row">
					<div class="col-1"></div>
					<div class="col-10 my-5">
						<div class="card-group">
						<div class="card mx-2 rounded text-center text-white" style="background-color: rgba(12,23,23, 0.5);">
							<div class="card-body">
							<h1 class="card-title display-4">{{ $fooditems }}</h1>
							<h3 class="card-title"><strong>Food Items</strong></h3>
							</div>
						</div>
						<div class="card mx-2 rounded text-center text-white" style="background-color: rgba(12,23,23, 0.5);">
							<div class="card-body">
							<h1 class="card-title display-4">10</h1>
							<h3 class="card-title"><strong>Tables</strong></h3>
							</div>
						</div>
						<div class="card mx-2 rounded text-center text-white" style="background-color: rgba(12,23,23, 0.5);">
							<div class="card-body">
							<h1 class="card-title display-4">{{ $orders }}</h1>
							<h3 class="card-title"><strong>Orders Completed</strong></h3>
							</div>
						</div>

						</div>
					</div>
					<div class="col-1"></div>
				</div>
		</div>
	</div>
</div>

<!-- Comment of Board Director -->
<div class="container">
	<div class="row">
		<div class="col-2"></div>
		<div class="col-8">
			<div class="row">
				<ul class="list-unstyled my-2">
				  <li class="media my-5">
				    <img src="img/ceo3.jpg" width="100" class="mr-3 rounded-circle" alt="...">
				    <div class="media-body pl-3 ml-2" style="border-left: 4px solid #0095ff">
				      <h3 class="mt-0 mb-1">Managing Director</h3>
				      Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.
				    </div>
				  </li>
				  <li class="media my-5">
				    <img src="img/ceo2.jpg" width="100" class="mr-3 rounded-circle" alt="...">
				    <div class="media-body pl-3 ml-2" style="border-left: 4px solid #0095ff">
				      <h3 class="mt-0 mb-1">Operation Director</h3>
				      Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.
				    </div>
				  </li>
				  <li class="media my-5">
				    <img src="img/ceo.jpg" width="100" class="mr-3 rounded-circle" alt="...">
				    <div class="media-body pl-3 ml-2" style="border-left: 4px solid #0095ff">
				      <h3 class="mt-0 mb-1">Co-Ordinator</h3>
				      Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.
				    </div>
				  </li>
				</ul>
			</div>
		</div>
		<div class="col-2"></div>
	</div>
</div>
@endsection