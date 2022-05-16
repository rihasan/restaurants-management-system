@extends('admin.adminmaster')

@section('content')
<!-- MENU -->
<section class="order-list py-3 common-shadow">
    <div class="container-fluid">
        <div class="row">
            <div class="col-xl-10 col-lg-9 col-md-8 ml-auto">
                <div class="row mb-5">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header d-flex justify-content-between">
                                <h1 class="card-text">Menu</h1>

                                @if(session('addmenu'))
                                <div class="alert alert-success h3" id="msg">
                                    {{session('addmenu')}}
                                    <button type="button" class="close pl-4" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                </div>
                                @endif

                                @if(session('doaddcategory'))
                                <div class="alert alert-success h3" id="msg">
                                    {{session('doaddcategory')}}
                                    <button type="button" class="close pl-4" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                </div>
                                @endif

                                @if(session('doeditmenu'))
                                <div class="alert alert-success h3" id="msg">
                                    {{session('doeditmenu')}}
                                    <button type="button" class="close pl-4" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                </div>
                                @endif

                                 @if(session('menufoodr'))
                                <div class="alert alert-success h3" id="msg">
                                    {{session('menufoodr')}}
                                    <button type="button" class="close pl-4" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                </div>
                                @endif
                                
                                <div>
                                    <button class="btn btn-lg btn-success ml-auto" data-toggle="modal" data-target="#addFoodModal"><i class="fas fa-plus-circle"></i> Add Food</button>
                                    <button class="btn btn-lg btn-success ml-auto" data-toggle="modal" data-target="#addCategoryModal"><i class="fas fa-plus-circle"></i> Add Category</button>
                                </div>
                            </div>
                            <div class="card-body mx-auto">
                                <table class="table table-responsive table-hover text-center">
                                    <thead class="thead-background">
                                        <tr>
                                            <th scope="col">ID</th>
                                            <th scope="col">Food Name</th>
                                            <th scope="col">Food Details</th>
                                            <th scope="col">Food Price</th>
                                            <th scope="col">Food Category</th>
                                            <th scope="col">Food Image</th>
                                            <th scope="col">Action</th>
                                        </tr>
                                    </thead>
    
                                    <tbody>
                                        @if(!empty($menutable))
                                            @foreach($menutable as $menu)
                                                <tr>
                                                    <th scope="row">{{ $menu->id }}</th>
                                                    <td>{{ $menu->foodname }}</td>
                                                    <td>{{ $menu->fooddetails }}</td>
                                                    <td>{{ $menu->foodprice }}</td>
                                                    <td>{{ $menu->foodcategory }}</td>
                                                    <td>
                                                        <img src="img/{{$menu->foodimage}}" class="img-fluid" width="100">
                                                    </td>
                                                    <td>
                                                        <button class="btn btn-md btn-primary m-1"  data-toggle="modal" data-target="#editFoodModal{{$menu->id}}">Edit</button>

    <!-- editFoodModal MODAL -->
    <div class="modal fade" id="editFoodModal{{$menu->id}}">
        <div class="modal-dialog modal-md">
            <div class="modal-content">
                <div class="modal-header bg-modal text-white">
                    <h5 class="modal-title">Edit Food Item</h5>
                    <button class="close text-white" data-dismiss="modal"><span>&times;</span></button>
                </div>
                <form action="{{route('editmenu.submit')}}" method="POST" enctype="multipart/form-data">
                @csrf
                    <div class="modal-body">
                        <div class="form-group">
                            <label for="foodname">Food Name</label>
                            <input type="text" name="foodname" class="form-control" placeholder="Enter Food Name" value="{{ $menu->foodname }}" required="true">
                        </div>
                        <div class="form-group">
                            <label for="fooddetails">Food Details</label>
                            <textarea class="form-control" name="fooddetails" required="true" style="resize: none;">{{ $menu->fooddetails }}</textarea>
                        </div>
                        <div class="form-group">
                            <label for="price">Food Price</label>
                            <input type="text" name="foodprice" class="form-control" placeholder="Enter Price" value="{{ $menu->foodprice }}" required="true">
                        </div>
                        <div class="form-group">
                            <label for="foodcategory">Food Category</label>
                            <select class="form-control" name="foodcategory" required="true">
                                <option value="{{ $menu->foodcategory }}">{{ $menu->foodcategory }}</option>
                                @if(!empty($categories))
                                    @foreach($categories as $category)
                                        <option value="{{$category->category}}">{{$category->category}}</option>
                                    @endforeach
                                @endif
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="foodImage">Food Image</label>
                            <input type="file" name="foodimage" class="form-control-file" placeholder="Choose Food Image">
                        </div>

                        <input type="hidden" name="menuid" value="{{$menu->id}}">
                        <input type="hidden" name="oldimg" value="{{$menu->foodimage}}">

                    </div>
                    <div class="modal-footer">
                        <button class="btn btn-danger" data-dismiss="modal">Close</button>
                        <button class="btn btn-success" type="submit">Save Changes</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- ./editFoodModal MODAL -->


                                                        <a class="btn btn-md btn-danger m-1" data-toggle="modal" data-target="#deletemanu{{$menu->id}}" href="#">Delete</a>

                                 <div class="modal fade" id="deletemanu{{$menu->id}}">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h4 class="modal-title">Delete Food</h4>
                                        <button type="button" class="close" data-dismiss="modal"><span>&times;</span></button>
                                    </div>
                                    <div class="modal-body">
                                        <p class="lead">Are You Sure Delete This?</p>
                                    </div>
                                    <div class="modal-footer">
                                        <button class="btn btn-success rounded-0" type="button" data-dismiss="modal">No</button>
                                        <a href='{{url("/removemenu/{$menu->id}")}}' class="btn btn-danger rounded-0">Yes</a>
                                    </div>
                                </div>
                            </div>
                        </div>

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
</section><!-- ./MENU-->

<!-- addFoodModal MODAL -->
<div class="modal fade" id="addFoodModal">
    <div class="modal-dialog modal-md">
        <div class="modal-content">
            <div class="modal-header bg-modal text-white">
                <h5 class="modal-title">Add Food Item</h5>
                <button class="close text-white" data-dismiss="modal"><span>&times;</span></button>
            </div>
            <form action="{{route('doaddmenu.submit')}}" method="POST" enctype="multipart/form-data">
            @csrf
                <div class="modal-body">
                    <div class="form-group">
                        <label for="foodname">Food Name</label>
                        <input type="text" name="foodname" class="form-control" placeholder="Enter Food Name" required="true">
                    </div>
                    <div class="form-group">
                        <label for="fooddetails">Food Details</label>
                        <textarea class="form-control" name="fooddetails" required="true" style="resize: none;"></textarea>
                    </div>
                    <div class="form-group">
                        <label for="price">Food Price</label>
                        <input type="text" name="foodprice" class="form-control" placeholder="Enter Price" required="true">
                    </div>
                    <div class="form-group">
                        <label for="foodcategory">Food Category</label>
                        <select class="form-control" name="foodcategory" required="true">
                            <option value="">-- Select Food Category --</option>
                            @if(!empty($categories))
                                @foreach($categories as $category)
                                    <option value="{{$category->category}}">{{$category->category}}</option>
                                @endforeach
                            @endif
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="foodImage">Food Image</label>
                        <input type="file" name="foodimage" class="form-control-file" placeholder="Choose Food Image" required="true">
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
<!-- ./addFoodModal MODAL -->


<!-- addCategoryModal MODAL -->
<div class="modal fade" id="addCategoryModal">
    <div class="modal-dialog modal-md">
        <div class="modal-content">
            <div class="modal-header bg-modal text-white">
                <h5 class="modal-title">Add Category</h5>
                <button class="close text-white" data-dismiss="modal"><span>&times;</span></button>
            </div>
            <form action="{{route('doaddcategory.submit')}}" method="POST">
                @csrf
                <div class="modal-body">
                    <div class="form-group">
                        <label for="addcategory">Add Category</label>
                        <input type="text" name="category" class="form-control" placeholder="Enter Category Name" required="true">
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
<!-- ./addCategoryModal MODAL -->
@endsection