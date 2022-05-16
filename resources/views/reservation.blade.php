@extends('layout.master')

@section('content')

<!-- RESERVATION -->
<div class="reservation pt-5">
    <h1 class="h1 text-center font-weight-bold text-uppercase mt-4">Reservation</h1>
    <div class="title-bottom"></div>
    <div class="container-fluid">
        
        @if(session('addreservation'))
        <div class="alert alert-success h3" id="msg">
            {{session('addreservation')}}
            <button type="button" class="close pl-4" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        </div>
        @endif

        <div class="row gutters">
            <div class="col-6">
                <div class="card my-5" style="box-shadow: 0px 0px 2px 2px #ccc;">
                    <div class="card-body">
                        <img src="img/reservation.jpg" alt="" class="img-fluid">
                    </div>
                </div>
            </div>

            <div class="col-6">
                <div class="card my-5" style="box-shadow: 0px 0px 2px 2px #ccc;">
                    <h3 class="card-header text-center">Table Reservation</h3>
                    <div class="card-body">
                        <form action="{{route('doreservation.submit')}}" method="POST">
                            @csrf
                            <div class="form-group row">
                                <label for="name2" class="col-3 col-form-label">Name</label>
                                <div class="col-9">
                                    <input type="text" name="name" class="form-control" id="name2" placeholder="Name" required="true">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="email2" class="col-3 col-form-label">Email</label>
                                <div class="col-9">
                                    <input type="email" name="email" class="form-control" id="email2" placeholder="Email" required="true">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="phone" class="col-3 col-form-label">Phone</label>
                                <div class="col-9">
                                    <input type="tel" name="phone" class="form-control" id="phone" placeholder="Phone" required="true">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="Tableno" class="col-3 col-form-lable">Table Number</label>
                                <div class="col-9">
                                    <select class="form-control" name="tableno" id="Tableno" required="true">
                                        <option>-- Select Your Table --</option>
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <option value="5">5</option>
                                        <option value="6">6</option>
                                        <option value="7">7</option>
                                        <option value="8">8</option>
                                        <option value="9">9</option>
                                        <option value="10">10</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-3 col-form-label">Date</label>
                                <div class="col">
                                    <input type="date" name="date" class="form-control" placeholder="On which date" required="true">
                                </div>
                                <label class="col-2 col-form-label">Time</label>
                                <div class="col">
                                    <input type="time" name="time" class="form-control" placeholder="On which time" required="true">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="guest" class="col-3 col-form-label">No of Guest</label>
                                <div class="col-9">
                                    <input type="number" name="noofguest" class="form-control" id="guest" placeholder="Number of Guest" required="true">
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-10">
                                    <button type="submit" class="btn btn-info">Book Your Table</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection