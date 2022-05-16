@extends('admin.adminmaster')

@section('content')

<!-- TABLE RESERVATION -->
<section class="order-list py-3 common-shadow">
    <div class="container-fluid">
        <div class="row">
            <div class="col-xl-10 col-lg-9 col-md-8 ml-auto">
                <div class="row mb-5">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header d-flex justify-content-between">
                                <h1 class="card-text">Table Reservation</h1>
                                 @if(session('tableapprove'))
                                <div class="alert alert-success h3" id="msg">
                                    {{session('tableapprove')}}
                                    <button type="button" class="close pl-4" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                </div>
                                @endif

                                @if(session('deletereservationtable'))
                                <div class="alert alert-success h3" id="msg">
                                    {{session('deletereservationtable')}}
                                    <button type="button" class="close pl-4" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                </div>
                                @endif
                            </div>
                            <div class="card-body">
                                <table class="table table-responsive table-striped text-center">
                                    <thead class="thead-background">
                                        <tr>
                                            <th scope="col">ID</th>
                                            <th scope="col">Name</th>
                                            <th scope="col">Email</th>
                                            <th scope="col">Phone</th>
                                            <th scope="col">Date</th>
                                            <th scope="col">Time</th>
                                            <th scope="col">Guest No</th>
                                            <th scope="col">Table No</th>
                                            <th scope="col">Status</th>
                                            <th scope="col">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @if(!empty($reservations))
                                            @foreach($reservations as $reservation)
                                                <tr>
                                                    <th scope="row">{{ $reservation->id }}</th>
                                                    <td>{{ $reservation->name }}</td>
                                                    <td>{{ $reservation->email }}</td>
                                                    <td>{{ $reservation->phone }}</td>
                                                    <td>{{ $reservation->date }}</td>
                                                    <td>{{ $reservation->time }}</td>
                                                    <td>{{ $reservation->noofguest }}</td>
                                                    <td>{{ $reservation->tableno }}</td>
                                                    <td>{{ $reservation->status }}</td>
                                                    <td>
                                                        <a href='{{url("/approve/{$reservation->id}/Approved")}}' class="btn btn-success m-1">Approve</a>
                                                        <a href='{{url("/deletereservation/{$reservation->id}")}}' class="btn btn-md btn-danger m-1">Cancel</a>
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
</section>
<!-- END TABLE RESERVATION-->
@endsection