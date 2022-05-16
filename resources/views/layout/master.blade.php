<!DOCTYPE html>
<html lang="en">
<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="{{asset('')}}css/bootstrap.min.css">
	
	<!-- Font Awesome CSS -->
	<link rel="stylesheet" href="{{asset('')}}css/all.min.css">
	
	<!-- Custom CSS -->
	<link rel="stylesheet" type="text/css" href="{{asset('')}}css/style1.css">

	<title>RMS</title>
</head>
<body>
	<!-- NavBar -->
	<nav class="navbar navbar-light bg-light fixed-top" style="box-shadow: 0px 0px 5px 5px #ccc;">
		<div class="container">
			<a class="navbar-brand" href="#">
				<img src="img/logo.jpg" width="30" height="30" class="d-inline-block align-top" alt="">
					Food Style
			</a>

			<ul class="nav justify-content-end">
				<li class="nav-item">
					<a class="nav-link border-left border-secondary" href="{{url('/')}}">Home</a>
				</li>
				<li class="nav-item border-left border-secondary">
					<a class="nav-link" href="{{url('/about')}}">About</a>
				</li>
				<li class="nav-item border-left border-secondary">
					<a class="nav-link" href="{{url('/menu')}}">Menu</a>
				</li>
				<li class="nav-item border-left border-secondary">
					<a class="nav-link" href="{{url('/order')}}">Order</a>
				</li>
				<li class="nav-item border-left border-secondary">
					<a class="nav-link" href="{{url('/reservation')}}">Reservation</a>
				</li>
				<li class="nav-item border-left border-right border-secondary">
					<a class="nav-link" href="{{url('/contact')}}">Contact Us</a>
				</li>
			</ul>
		</div>
	</nav>


	@yield('content')


	<!-- Footer -->
	<footer class="bg-dark" style="color: #aaa;">
		<div class="container">
			<div class="row py-3">
				<div class="col-4 my-auto">
					<img src="img/logo.jpg" width="40">
					<p class="d-inline">&copy; 2019 TechRihno</p>
				</div>
				<div class="col-5">
					<h2>Our Location</h2>
					<div class="footer-center">
						<div class="my-2">
							<i class="text-light border p-2 rounded fa fa-map-marker"></i>
							<p class="d-inline">21 Revolution Street, Paris, France</p>
						</div>
						<div class="my-2">
							<i class="text-light border p-2 rounded fa fa-phone"></i>
							<p class="d-inline">+1 555 123456</p>
						</div>
						<div class="my-2">
							<i class="text-light border p-2 rounded fa fa-envelope"></i>
							<p class="d-inline">example@example.com</p>
						</div>
					</div>
					<div class="footer-icons my-3">
						<a class="border rounded p-2 text-white m-2" href="#"><i class="fab fa-facebook"></i></a>
						<a class="border rounded p-2 text-white m-2" href="#"><i class="fab fa-twitter"></i></a>
						<a class="border rounded p-2 text-white m-2" href="#"><i class="fab fa-linkedin"></i></a>
						<a class="border rounded p-2 text-white m-2" href="#"><i class="fab fa-github"></i></a>
					</div>
				</div>
				<div class="col-3">
					<ul class="nav flex-column">
						<li class="nav-item border-bottom">
							<a class="nav-link" style="color: #aaa;" href="#">Home</a>
						</li>
						<li class="nav-item border-bottom">
							<a class="nav-link" style="color: #aaa;" href="#">Food Menu</a>
						</li>
						<li class="nav-item border-bottom">
							<a class="nav-link" style="color: #aaa;" href="#">Food Order</a>
						</li>
						<li class="nav-item border-bottom">
							<a class="nav-link" style="color: #aaa;" href="#">Table Reservation</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" style="color: #aaa;" href="#">Contuct Us</a>
						</li>
					</ul>
				</div>
			</div>
		</div>
	</footer>

	<!-- Optional JavaScript -->
	<!-- jQuery first, then Popper.js, then Bootstrap JS -->
	<script src="{{asset('')}}js/jquery-3.3.1.slim.min.js"></script>
	<script src="{{asset('')}}js/popper.min.js"></script>
	<script src="{{asset('')}}js/bootstrap.min.js"></script>
    <script src="{{asset('')}}js/main.js"></script>

</body>
</html>
