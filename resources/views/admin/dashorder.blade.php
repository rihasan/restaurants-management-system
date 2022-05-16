@extends('admin.adminmaster')

@section('content')
<!-- ORDER LIST -->
<section class="order-list py-3 common-shadow">
    <div class="container-fluid">
        <div class="row">
            <div class="col-xl-10 col-lg-9 col-md-8 ml-auto">
                <div class="row mb-5">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header d-flex justify-content-between">
                                <h1 class="card-text">Orders List</h1>
                                 @if(session('dashordercon'))
                                <div class="alert alert-success h3" id="msg">
                                    {{session('dashordercon')}}
                                    <button type="button" class="close pl-4" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                </div>
                                @endif

                                @if(session('orderfoodr'))
                                <div class="alert alert-success h3" id="msg">
                                    {{session('orderfoodr')}}
                                    <button type="button" class="close pl-4" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                </div>
                                @endif
                            </div>
                            <div class="card-body">
                                <table class="table table-responsive table-hover text-center">
                                    <thead class="thead-background">
                                        <tr>
                                            <th scope="col">Order ID</th>
                                            <th scope="col">Name</th>
                                            <th scope="col">Email</th>
                                            <th scope="col">Phone</th>
                                            <th scope="col">Location</th>
                                            <th scope="col">Order Type</th>
                                            <th scope="col">Food List</th>
                                            <th scope="col">Price</th>
                                            <th scope="col">Status</th>
                                            <th scope="col">Time/Date</th>
                                            <th scope="col">Action</th>
                                        </tr>
                                    </thead>
    
                                    <tbody>
                                        @if(!empty($orders))
                                            @foreach($orders as $order)
                                                <tr>
                                                    <th scope="row">{{ $order->id }}</th>
                                                    <td>{{ $order->name }}</td>
                                                    <td>{{ $order->email }}</td>
                                                    <td>{{ $order->phone }}</td>
                                                    <td>{{ $order->location }}</td>
                                                    <td>{{ $order->ordertype }}</td>
                                                    <td>{{ $order->foodlist }}</td>
                                                    <td>{{ $order->totalprice }}</td>
                                                    <td>{{ $order->status  }}</td>
                                                    <td>{{ $order->created_at }}</td>
                                                    <td>
                                                        <a href='{{url("/confirm/{$order->id}/confirm")}}' class="btn btn-success m-1">Approve</a>
                                                        <a href='{{url("/removeorder/{$order->id}")}}' class="btn btn-md btn-danger m-1">Cancel</a>
                                                    </td>
                                                </tr>
                                            @endforeach
                                        @endif
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section><!-- ./ORDER LIST-->
@endsection