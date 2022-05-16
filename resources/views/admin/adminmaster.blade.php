<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('')}}/css/all.min.css">
    <link rel="stylesheet" href="{{asset('')}}/css/bootstrap-datetimepicker.min.css">
    <link rel="stylesheet" href="{{asset('')}}/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{asset('')}}/css/style.css">
    <title>Restaurent Dashboard</title>
</head>
<body>
    <!-- SIDEBAR -->
    <nav class="navbar navbar-expand-md navbar-light p-0">
        <button class="navbar-toggler ml-auto mb-2 bg-light" type="button" data-toggle="collapse" data-target="#navbarNav">
            <i class="fas fa-align-right fa-lg text-info"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <div class="container-fluid">
                <div class="row">
                    <!-- SIDEBAR -->
                    <div class="col-xl-2 col-lg-3 col-md-4 fixed-top sidebar bg-dark text-light p-0">
                        <a href="{{url('/dashboard')}}" class="navbar-brand text-light text-uppercase d-block mx-auto mb-3 button-border p-2">
                            <h5 class="text-center"><i class="fas fa-utensils"></i> Restaurant <br> Management <br> System</h5>
                            <p class="text-center">Taste the myth</p>
                        </a>

                        <ul class="navbar-nav flex-column">
                            <li class="nav-item current">
                                <a href="{{url('/dashboard')}}" class="nav-link text-white mb-2">
                                    <i class="fas fa-tachometer-alt fa-lg mr-2"></i>Dashboard
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{url('/dashorder')}}" class="nav-link text-white mb-2 sidebar-link">
                                    <i class="fas fa-list-ul fa-lg mr-2"></i>Food Orders
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{url('/tablereservation')}}" class="nav-link text-white mb-2 sidebar-link">
                                    <i class="fas fa-table fa-lg mr-2"></i>Table Reservation
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{url('/dashmenu')}}" class="nav-link text-white mb-2 sidebar-link">
                                    <i class="fas fa-file-alt fa-lg mr-2"></i>Menu
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('register') }}" class="nav-link text-white mb-2 sidebar-link">
                                    <i class="fas fa-user-circle fa-lg mr-2"></i>New Admin
                                </a>
                            </li>
                            <li class="nav-item dropright">
                                <a href="{{url('/revenue')}}" class="nav-link text-white mb-2 sidebar-link">
                                    <i class="fas fa-file-alt fa-lg mr-2"></i>Revenue Report
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{url('/message')}}" class="nav-link text-white mb-2 sidebar-link">
                                    <i class="fas fa-envelope fa-lg mr-2"></i>Message
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{url('/staff')}}" class="nav-link text-white mb-2 sidebar-link">
                                    <i class="fas fa-users fa-lg mr-2"></i>Staff
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{url('/expense')}}" class="nav-link text-white mb-2 sidebar-link">
                                    <i class="fas fa-dollar-sign fa-lg mr-2"></i>Expense
                                </a>
                            </li>
                        </ul>
                    </div><!-- ./SIDEBAR -->
                </div>
            </div>
        </div>
    </nav><!-- ./SIDEBAR -->

    <!-- TOPNAV -->
    <section class="topnav">
        <div class="container-fluid px-4">
            <div class="row">
                <div class="col-xl-10 col-lg-9 col-md-8 ml-auto">
                    <ul class="nav">
                        <li class="nav-item">
                            <a class="nav-link active" href="#">
                                <h2><i class="fas fa-bars mr-3"></i> Dashboard</h2>
                            </a>
                        </li>
                        <li class="nav-item ml-auto">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" style="font-size: 1rem; text-transform: lowercase;">
                                <i class="fas fa-user-circle fa-lg"></i> {{ Auth::user()->name }}
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="#" role="button" data-toggle="modal" data-target="#editProfileModal"><i class="fas fa-user"></i> Edit Profile</a>
                                
                                 <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        <i class="fas fa-power-off"></i>{{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section><!-- ./TOPNAV -->


        <!-- editProfileModal MODAL -->
    <div class="modal fade" id="editProfileModal">
        <div class="modal-dialog modal-md">
            <div class="modal-content">
                <div class="modal-header bg-modal text-white">
                    <h5 class="modal-title">Edit Profile</h5>
                    <button class="close text-white" data-dismiss="modal"><span>&times;</span></button>
                </div>
                <form action="{{route('updateprofile.submit')}}" method="post">
                @csrf
                    <div class="modal-body">
                        <div class="form-group">
                            <label for="roomtype">Name</label>
                            <input type="text" class="form-control" name="name" placeholder="Enter Full Name" value="{{Auth::user()->name}}" required="true">
                        </div>
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="email" class="form-control" name="email" placeholder="Enter Your Email" value="{{Auth::user()->email}}" required="true">
                        </div>
                        <div class="form-group">
                            <label for="password">Password</label>
                            <input type="password" class="form-control" name="password" placeholder="Enter Your Password" required="true">
                            
                        </div>                    
                    </div>
                    <div class="modal-footer">
                        <button class="btn btn-danger" data-dismiss="modal">Close</button>
                        <button class="btn btn-success" type="submit">Update Profile</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- ./editProfileModal MODAL -->

    @yield('content')


     <?php 

        $expense = array(0,0,0,0,0,0,0,0,0,0,0,0);
        $revenue = array(0,0,0,0,0,0,0,0,0,0,0,0);

        $newrevenue = array();
        $newrevenueprice = array();
        $reservation = App\Orders::get();
        foreach ($reservation as $r) {
            $newrevenue[] = $r->created_at->format('m');
            $newrevenueprice[] = $r->totalprice;
        }
        for ($i=0; $i<count($newrevenue); $i++) {
            $revenue[$newrevenue[$i]-1] += $newrevenueprice[$i];
        }

        $newexpense = array();
        $newexpenseprice = array();
        $expenses = App\Expenses::get();
        foreach ($expenses as $e) {
            $newexpense[] = $e->created_at->format('m');
            $newexpenseprice[] = $e->amount;
        }
        for ($i=0; $i<count($newexpense); $i++) {
            $expense[$newexpense[$i]-1] += $newexpenseprice[$i];
        }

    ?>


    <!-- JavaScript -->
    <script src="{{asset('')}}/js/jquery-3.3.1.slim.min.js"></script>
    <script src="{{asset('')}}/js/popper.min.js"></script>
    <script src="{{asset('')}}/js/bootstrap.min.js"></script>

    <!-- CHART JS -->
    <script src="{{asset('')}}/js/Chart.bundle.min.js"></script>



    <!-- CUSTOM JAVASCRIPT -->
        <script type="text/javascript">
        var jan = <?php echo $revenue[0]?>;
        var feb = <?php echo $revenue[1]?>;
        var mar = <?php echo $revenue[2]?>;
        var apr = <?php echo $revenue[3]?>;
        var may = <?php echo $revenue[4]?>;
        var jun = <?php echo $revenue[5]?>;
        var jul = <?php echo $revenue[6]?>;
        var aug = <?php echo $revenue[7]?>;
        var sep = <?php echo $revenue[8]?>;
        var oct = <?php echo $revenue[9]?>;
        var nov = <?php echo $revenue[10]?>;
        var dec = <?php echo $revenue[11]?>;
        var ejan = <?php echo $expense[0]?>;
        var efeb = <?php echo $expense[1]?>;
        var emar = <?php echo $expense[2]?>;
        var eapr = <?php echo $expense[3]?>;
        var emay = <?php echo $expense[4]?>;
        var ejun = <?php echo $expense[5]?>;
        var ejul = <?php echo $expense[6]?>;
        var eaug = <?php echo $expense[7]?>;
        var esep = <?php echo $expense[8]?>;
        var eoct = <?php echo $expense[9]?>;
        var enov = <?php echo $expense[10]?>;
        var edec = <?php echo $expense[11]?>;
        let ctx = document.getElementById('donught').getContext('2d');
        let chart = new Chart(ctx, {
            // The type of chart we want to create
            type: 'line',

            // The data for our dataset
            data: {
            labels: ['July', 'August', 'September', 'October', 'November', 'December'],
            datasets: [{
                label: 'Revenue Line',
                borderColor: 'rgb(101, 201, 123)',
                backgroundColor: 'rgb(101, 201, 123)',
                fill: 'true',
                data: [jul, aug, sep, oct, nov, dec]
            },{
                label: 'Expense Line',
                borderColor: 'rgb(224, 105, 119)',
                backgroundColor: 'rgb(224, 105, 119)',
                fill: 'true',
                data: [ejul, eaug, esep, eoct, enov, edec]
            }]
        },


        // Configuration options go here
        options: {}
        });
    </script>

    <!-- Graph Printing -->
    <script type="text/javascript">
        $(document).ready(function(){
            $('#printinfo').click(function(){
                window.print();
            });
        });   
    </script>


</body>
</html>

