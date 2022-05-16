@extends('admin.adminmaster')

@section('content')

<!-- DETAILS -->
<section class="common-shadow py-3">
    <div class="container-fluid">
        <div class="row">
            <div class="col-xl-10 col-lg-9 col-md-8 ml-auto">
                <div class="row mb-5">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header d-flex justify-content-between">
                                <h1 class="card-text">Expense</h1>

                                @if(session('addexpense'))
                                <div class="alert alert-success h5 ml-auto" id="msg">
                                    {{session('addexpense')}}
                                    <button type="button" class="close pl-4" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                @endif

                                @if(session('addexpensecategories'))
                                <div class="alert alert-success h5 ml-auto" id="msg">
                                    {{session('addexpensecategories')}}
                                    <button type="button" class="close pl-4" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                @endif

                                @if(session('deleteexpense'))
                                <div class="alert alert-success h3" id="msg">
                                    {{session('deleteexpense')}}
                                    <button type="button" class="close pl-4" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                </div>
                                @endif

                                @if(session('updateex'))
                                <div class="alert alert-success h3" id="msg">
                                    {{session('updateex')}}
                                    <button type="button" class="close pl-4" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                </div>
                                @endif

                                <button class="btn btn-lg btn-success ml-auto" data-toggle="modal" data-target="#addExpenseModal"><i class="fas fa-plus-circle"></i> Add Expense</button>
                                <button class="btn btn-lg btn-success ml-2" data-toggle="modal" data-target="#addCategoryModal"><i class="fas fa-plus-circle"></i> Add Category</button>
                            </div>
                            <div class="card-body mx-auto">
                                <table class="table table-responsive table-striped text-center">
                                    <thead class="thead-dark">
                                        <tr>
                                            <th scope="col">Expense ID</th>
                                            <th scope="col">Expense Category</th>
                                            <th scope="col">Expense Amount</th>
                                            <th scope="col">Expense Date</th>
                                            <th scope="col">Action</th>
                                        </tr>
                                    </thead>
    
                                    <tbody>
                                        @if(!empty($expenses))
                                            @foreach($expenses as $expense)
                                                <tr>
                                                    <th scope="row">{{ $expense->id }}</th>
                                                    <td>{{ $expense->category }}</td>
                                                    <td>{{ $expense->amount }} <span class="h3">&#2547;</span></td>
                                                    <td>{{ $expense->date }}</td>
                                                    <td>
                                                        <button class="btn btn-md btn-success" data-toggle="modal" data-target="#editaddExpenseModal{{$expense->id}}">Edit</button>


<!-- Expense MODAL -->
<div class="modal fade" id="editaddExpenseModal{{$expense->id}}" style="height: 500px; overflow: hidden;">
    <div class="modal-dialog modal-md">
        <div class="modal-content">
            <div class="modal-header bg-success text-white">
                <h5 class="modal-title">Edit Expense</h5>
                <button class="close text-white" data-dismiss="modal"><span>&times;</span></button>
            </div>
            <form action="{{route('editexpense.submit')}}" method="POST">
                @csrf
                <div class="modal-body">
                    <div class="form-group">
                        <label for="title">Expense Category</label>
                        <select name="category" class="form-control" required="true">
                            @if(!empty($expensecategories))
                            <option value="{{ $expense->category }}">{{ $expense->category }}</option>
                                @foreach($expensecategories as $expensecategory)
                                    <option value="{{ $expensecategory->category }}">{{ $expensecategory->category }}</option>
                                @endforeach
                            @endif
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="title">Expense Amount</label>
                        <input type="text" name="amount" value="{{ $expense->amount }}" class="form-control" required="true">
                    </div>
                    <div class="form-group">
                        <label for="date">Expense Date</label>
                        <input type="text" name="date" value="{{ $expense->date }}" class="form-control" id="date" required="true">
                    </div>
                    <input type="hidden" name="exid" value="{{ $expense->id }}">
                </div>
                <div class="modal-footer">
                    <button class="btn btn-danger" data-dismiss="modal">Close</button>
                    <button class="btn btn-success" type="submit">Save Changes</button>
                </div>
            </form>
        </div>
    </div>
</div><!-- ./Expense MODAL -->

                                                        <a href='{{url("/removeexpense/{$expense->id}")}}' class="btn btn-md btn-danger m-1">Delete</a>
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
</section><!-- ./DETAILS-->


<!-- CATEGORY MODAL -->
<div class="modal fade" id="addCategoryModal">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header bg-success text-white">
                <h5 class="modal-title">Add Category</h5>
                <button class="close text-white" data-dismiss="modal"><span>&times;</span></button>
            </div>
            <form action="{{route('doaddexpensecategories.submit')}}" method="POST">
                @csrf
                <div class="modal-body">
                    <div class="form-group">
                        <label for="title">Category Name</label>
                        <input type="text" name="category" class="form-control" required="true">
                    </div>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-danger" data-dismiss="modal">Close</button>
                    <button class="btn btn-success" type="submit">Save Changes</button>
                </div>
            </form>
        </div>
    </div>
</div><!-- ./CATEGORY MODAL -->

<!-- Expense MODAL -->
<div class="modal fade" id="addExpenseModal">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header bg-success text-white">
                <h5 class="modal-title">Add Expense</h5>
                <button class="close text-white" data-dismiss="modal"><span>&times;</span></button>
            </div>
            <form action="{{route('doaddexpense.submit')}}" method="POST">
                @csrf
                <div class="modal-body">
                    <div class="form-group">
                        <label for="title">Expense Category</label>
                        <select name="category" class="form-control" required="true">
                            @if(!empty($expensecategories))
                                @foreach($expensecategories as $expensecategory)
                                    <option value="{{ $expensecategory->category }}">{{ $expensecategory->category }}</option>
                                @endforeach
                            @endif
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="title">Expense Amount</label>
                        <input type="text" name="amount" class="form-control" required="true">
                    </div>
                    <div class="form-group">
                        <label for="date">Expense Date</label>
                        <input type="date" name="date" class="form-control" id="date" required="true">
                    </div>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-danger" data-dismiss="modal">Close</button>
                    <button class="btn btn-success" type="submit">Save Changes</button>
                </div>
            </form>
        </div>
    </div>
</div><!-- ./Expense MODAL -->

@endsection