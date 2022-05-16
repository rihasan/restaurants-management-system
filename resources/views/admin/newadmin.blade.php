@extends('admin.adminmaster')

@section('content')
<!-- NEWADMIN -->
<section class="order-list py-3 common-shadow">
    <div class="container-fluid">
        <div class="row">
            <div class="col-xl-10 col-lg-9 col-md-8 ml-auto">
                <div class="row mb-5">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header d-flex justify-content-between">
                                <h1 class="card-text">NEW ADMIN</h1>

                                @if(session('addnewadmin'))
                                <div class="alert alert-success h3" id="msg">
                                    {{session('addnewadmin')}}
                                    <button type="button" class="close pl-4" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                </div>
                                @endif
                                
                                <div>
                                    <button class="btn btn-lg btn-success ml-auto" data-toggle="modal" data-target="#newAdminModal"><i class="fas fa-plus-circle"></i> Add Admin</button>
                                </div>
                            </div>
                            <div class="card-body mx-auto">
                                <table class="table table-responsive table-hover text-center">
                                    <thead class="thead-background">
                                        <tr>
                                            <th scope="col">ID</th>
                                            <th scope="col">Name</th>
                                            <th scope="col">Email</th>
                                            <th scope="col">Password</th>
                                            <th scope="col">Phone</th>
                                            <th scope="col">Action</th>
                                        </tr>
                                    </thead>
    
                                    <tbody>
                                        @if(!empty($newadmins))
                                            @foreach($newadmins as $newadmin)
                                                <tr>
                                                    <th scope="row">{{ $newadmin->id }}</th>
                                                    <td>{{ $newadmin->name }}</td>
                                                    <td>{{ $newadmin->email }}</td>
                                                    <td>{{ $newadmin->password }}</td>
                                                    <td>{{ $newadmin->phone }}</td>
                                                    <td>
                                                        <button class="btn btn-md btn-primary m-1">Edit</button>
                                                        <button class="btn btn-md btn-danger m-1">Delete</button>
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
</section><!-- ./NEWADMIN-->

<!-- newAdminModal MODAL -->
<div class="modal fade" id="newAdminModal">
    <div class="modal-dialog modal-md">
        <div class="modal-content">
            <div class="modal-header bg-modal text-white">
                <h5 class="modal-title">Registration</h5>
                <button class="close text-white" data-dismiss="modal"><span>&times;</span></button>
            </div>
            <form method="POST" action="{{route('doaddadmin.submit')}}">
                @csrf
                <div class="modal-body">   
                    <div class="form-group">
                        <label for="roomtype">Name</label>
                        <input type="text" name="name" class="form-control" placeholder="Enter Full Name" required="true">
                    </div>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" name="email" class="form-control" placeholder="Enter Your Email" required="true">
                    </div>
                    <div class="form-group">
                        <label for="password">Password</label>
                        <input type="password" name="password" class="form-control" placeholder="Enter Your Password" required="true">
                    </div>
                    <div class="form-group">
                        <label for="Phone">Phone Number</label>
                        <input type="tel" name="phone" class="form-control" placeholder="Enter Phone Number" required="true">
                    </div> 
                </div>
                <div class="modal-footer">
                    <button class="btn btn-danger" data-dismiss="modal">Close</button>
                    <button class="btn btn-success" type="submit">Save Changes</button>
                </div>
            </form>
        </div>
    </div>
</div>
<!-- ./newAdminModal MODAL -->

@endsection