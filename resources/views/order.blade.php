@extends('layout.master')

@section('content')
<div class="container-fluid" style="margin-top: 100px;">
	<h1 class="text-center text-center text-uppercase font-weight-bold mb-4">Place Your Order Here</h1>
	<div class="container">
		<div class="row">
			<div class="col-3"></div>
			<div class="col-6">
				  @if(session('addorder'))
                                <div class="alert alert-success h3" id="msg">
                                    {{session('addorder')}}
                                    <button type="button" class="close pl-4" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                </div>
                                @endif
				<form action="{{route('storeorder.submit')}}" method="POST">
					@csrf
					<div class="form-group row">
						<label for="name" class="col-3 col-form-label">Name</label>
						<div class="col-9">
							<input type="text" class="form-control" id="name" name="name" placeholder="Name" required="true">
						</div>
					</div>
					<div class="form-group row">
						<label for="email" class="col-3 col-form-label">Email</label>
						<div class="col-9">
							<input type="email" class="form-control" id="email" 
						name="email" 	placeholder="Email" required="true">
						</div>
					</div>
					<div class="form-group row">
						<label for="phone" class="col-3 col-form-label">Phone</label>
						<div class="col-9">
							<input type="tel" class="form-control" id="phone" name="phone" placeholder="Phone" required="true">
						</div>
					</div>
					<div class="form-group row">
						<label for="location" class="col-3 col-form-label">Location</label>
						<div class="col-9">
							<input type="text" class="form-control" id="location" name="location" placeholder="Enter Your Location" required="true">
						</div>
					</div>
					<hr>
					<div class="form-group row">
						<label class="col-3">Choose Item</label>
						<div class="col-9">
							<div class="row">
							@if(!empty($foodscates))
								@foreach($foodscates  as $cate)
									<div class="form-check form-check-inline">
										<input class="form-check-input" type="checkbox" name="foodlist[]" id="{{$cate->foodname}}" value="{{$cate->foodname}}-{{$cate->foodprice}}">
										<label class="form-check-label" for="{{$cate->foodname}}">{{$cate->foodname}} ({{$cate->foodprice}})</label>
									</div> &nbsp;&nbsp;
	  							@endforeach
  							@endif
  							</div>
						</div>
						
					</div>
					<hr>
					<div class="form-group row">
						<label class="col-3 col-form-label">Order Type</label>
						<div class="col-9">
							<input type="radio" name="ordertype" value="Delivery" checked> Delivery<br>
  							<input type="radio" name="ordertype" value="PickUp"> PickUp <br><br>
  						</div>
					</div>
					<div class="form-group row">
						<div class="col">
							<button type="submit" class="btn btn-info px-5 py-3">Order Food</button>
						</div>
					</div>
				</form>
			</div>
			<div class="col-3"></div>
		</div>
	</div>
</div>
@endsection