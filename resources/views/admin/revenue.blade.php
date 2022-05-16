@extends('admin.adminmaster')

@section('content')
<!-- REVENUE -->
<section class="common-shadow py-3">
    <div class="container-fluid px-4">
        <div class="row">
            <div class="col-xl-10 col-lg-9 col-md-8 ml-auto">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h1 class="card-title text-center">Revenue Report</h1>
                            </div>
                            <div class="card-body mx-auto">
                                <canvas id="donught" style="display: block;" width="600" height="450" class="chartjs-render-monitor"></canvas>
                            </div>
                            <div class="card-footer d-flex justify-content-center">
                                <button id="printinfo" class="btn btn-md btn-success mr-2">Print</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section><!-- ./REVENUE -->

@endsection