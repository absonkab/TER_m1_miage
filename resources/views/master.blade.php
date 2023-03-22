<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<title> @yield('title', 'Tableau de bord - POSTS-IT')</title>
		<!-- Tell the browser to be responsive to screen width -->
		<meta name="viewport" content="width=device-width, minimum-scale=1, maximum-scale=1" />

		<!-- v4.0.0-alpha.6 -->
		<link rel="stylesheet" href="{{asset('dist/bootstrap/css/bootstrap.min.css')}}">

		<!-- Google Font -->
		<link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">

		<!-- Theme style -->
		<link rel="stylesheet" href="{{asset('dist/jquery-toast-plugin/jquery.toast.min.css')}}">
		<link rel="stylesheet" href="{{asset('dist/css/style.css')}}">
		<link rel="stylesheet" href="{{asset('dist/css/font-awesome/css/font-awesome.min.css')}}">
		<link rel="stylesheet" href="{{asset('dist/css/et-line-font/et-line-font.css')}}">
		<link rel="stylesheet" href="{{asset('dist/css/themify-icons/themify-icons.css')}}">
		<link rel="stylesheet" href="{{asset('dist/plugins/hmenu/ace-responsive-menu.css')}}">
		<link rel="stylesheet" href="{{asset('dist/plugins/chartist-js/chartist-plugin-tooltip.css')}}">
		<!-- Chartist CSS -->
		<link rel="stylesheet" href="{{asset('dist/plugins/chartist-js/chartist.min.css')}}">
		<link rel="stylesheet" href="{{asset('dist/plugins/chartist-js/chartist-plugin-tooltip.css')}}">

		<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
		<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->
		<style type="text/css">
			.orange {
			  color: #ff7a00;
			}
			</style>
	</head>
	<body class="hold-transition skin-blue sidebar-mini">
		<div class="wrapper boxed-wrapper">
			<header class="main-header"> 
				@include('partials.header')
			</header>
			
			<!-- Main Nav -->
			<div class="main-nav">
				@include('partials.sidebar')
			</div>
			<!-- Main Nav --> 

			<!-- Content Wrapper. Contains page content -->
			<div class="content-wrapper"> 
				<!-- Content Header (Page header) -->
				<div class="content-header sty-one">
					<h1>Tableau de bord</h1>
					<ol class="breadcrumb">
						<li><a href="{{ route('home') }}">Accueil</a></li>
						<li><i class="fa fa-angle-right"></i> Dashboard</li>
					</ol>
					<hr>
					<h4 id='p1'></h4>
					<h4>
						<marquee>
							Bienvenue {{ strtoupper(Auth::user()->prenom) }} {{ strtoupper(Auth::user()->name) }} l'application de gestion de Post-It.
						</marquee>
					</h4>
					<hr>
					<h4>Mes Post-its</h4>
				</div>
					
					<!-- Main content -->
				<div class="content"> 
					<!-- Small boxes (Stat box) -->
					<div class="row">
						<div class="col-lg-3 col-sm-6 col-xs-12">
							<div class="info-box bg-darkblue"> <span class="info-box-icon bg-transparent"><i class="ti-stats-up text-white"></i></span>
								<div class="info-box-content">
									<h6 class="info-box-text text-white">New Orders</h6>
									<h1 class="text-white">1,150</h1>
									<span class="progress-description text-white"> 70% Increase in 30 Days </span> 
								</div>
								<!-- /.info-box-content --> 
							</div>
							<!-- /.info-box --> 
						</div>
						<!-- /.col -->
						<div class="col-lg-3 col-sm-6 col-xs-12">
							<div class="info-box bg-green text-white"> <span class="info-box-icon bg-transparent"><i class="ti-face-smile"></i></span>
								<div class="info-box-content">
									<h6 class="info-box-text text-white">New Users</h6>
									<h1 class="text-white">565</h1>
									<span class="progress-description text-white"> 45% Increase in 30 Days </span>
								</div>
								<!-- /.info-box-content --> 
							</div>
							<!-- /.info-box --> 
						</div>
						<!-- /.col -->
						<div class="col-lg-3 col-sm-6 col-xs-12">
							<div class="info-box bg-aqua"> <span class="info-box-icon bg-transparent"><i class="ti-bar-chart"></i></span>
								<div class="info-box-content">
									<h6 class="info-box-text text-white">Online Revenue</h6>
									<h1 class="text-white">$5,450</h1>
									<span class="progress-description text-white"> 50% Increase in 30 Days </span> 
								</div>
								<!-- /.info-box-content --> 
							</div>
							<!-- /.info-box --> 
						</div>
						<!-- /.col -->
						<div class="col-lg-3 col-sm-6 col-xs-12">
							<div class="info-box bg-orange"> <span class="info-box-icon bg-transparent"><i class="ti-money"></i></span>
								<div class="info-box-content">
									<h6 class="info-box-text text-white">Total Profit</h6>
									<h1 class="text-white">$8,188</h1>
									<span class="progress-description text-white"> 35% Increase in 30 Days </span> 
								</div>
								<!-- /.info-box-content --> 
							</div>
							<!-- /.info-box --> 
						</div>
						<!-- /.col --> 
					</div>
					<!-- /.row --> 
					<!-- Main row -->
				</div>

				<!-- Content Header (Page header) -->
				<div class="content-header sty-one">
					<hr>
					<h4>Post-its où je suis invité à voir</h4>
				</div>

				<!-- Main content -->
				<div class="content"> 
					<!-- Small boxes (Stat box) -->
					<div class="row">
						<div class="col-lg-3 col-sm-6 col-xs-12">
							<div class="info-box bg-darkblue"> <span class="info-box-icon bg-transparent"><i class="ti-stats-up text-white"></i></span>
								<div class="info-box-content">
									<h6 class="info-box-text text-white">New Orders</h6>
									<h1 class="text-white">1,150</h1>
									<span class="progress-description text-white"> 70% Increase in 30 Days </span> 
								</div>
								<!-- /.info-box-content --> 
							</div>
							<!-- /.info-box --> 
						</div>
						<!-- /.col -->
						<div class="col-lg-3 col-sm-6 col-xs-12">
							<div class="info-box bg-green text-white"> <span class="info-box-icon bg-transparent"><i class="ti-face-smile"></i></span>
								<div class="info-box-content">
									<h6 class="info-box-text text-white">New Users</h6>
									<h1 class="text-white">565</h1>
									<span class="progress-description text-white"> 45% Increase in 30 Days </span>
								</div>
								<!-- /.info-box-content --> 
							</div>
							<!-- /.info-box --> 
						</div>
						<!-- /.col -->
						<div class="col-lg-3 col-sm-6 col-xs-12">
							<div class="info-box bg-aqua"> <span class="info-box-icon bg-transparent"><i class="ti-bar-chart"></i></span>
								<div class="info-box-content">
									<h6 class="info-box-text text-white">Online Revenue</h6>
									<h1 class="text-white">$5,450</h1>
									<span class="progress-description text-white"> 50% Increase in 30 Days </span> 
								</div>
								<!-- /.info-box-content --> 
							</div>
							<!-- /.info-box --> 
						</div>
						<!-- /.col -->
						<div class="col-lg-3 col-sm-6 col-xs-12">
							<div class="info-box bg-orange"> <span class="info-box-icon bg-transparent"><i class="ti-money"></i></span>
								<div class="info-box-content">
									<h6 class="info-box-text text-white">Total Profit</h6>
									<h1 class="text-white">$8,188</h1>
									<span class="progress-description text-white"> 35% Increase in 30 Days </span> 
								</div>
								<!-- /.info-box-content --> 
							</div>
							<!-- /.info-box --> 
						</div>
						<!-- /.col --> 
					</div>
					<!-- /.row --> 
					<!-- Main row -->
				</div>

			</div>
					
			<!-- /.content-wrapper -->
			@include('partials.footer')
		</div>
		<!-- ./wrapper --> 

		
		<!-- jQuery 3 --> 
		<script src="{{asset('dist/js/jquery.min.js')}}"></script> 

		<!-- v4.0.0-alpha.6 --> 
		<script src="{{asset('dist/bootstrap/js/bootstrap.min.js')}}"></script> 

		<!-- template --> 
		<script src="{{asset('dist/js/niche.js')}}"></script> 

		<!-- Chartjs JavaScript --> 
		<script src="{{asset('dist/plugins/functions/dashboard2.js')}}"></script> 
		<script src="{{asset('dist/plugins/chartjs/chart.min.js')}}"></script> 

		<!-- Chartjs JavaScript --> 
		<script src="{{asset('dist/plugins/chartjs/chart.min.js')}}"></script>
		<script src="{{asset('dist/plugins/chartjs/chart-int.js')}}"></script>

		<!-- Chartist JavaScript --> 
		<script src="{{asset('dist/plugins/chartist-js/chartist.min.js')}}"></script> 
		<script src="{{asset('dist/plugins/chartist-js/chartist-plugin-tooltip.js')}}"></script> 
		<script src="{{asset('dist/plugins/functions/chartist-init.js')}}"></script>
		<script src="{{asset('dist/plugins/hmenu/ace-responsive-menu.js')}}" type="text/javascript"></script> 
		<!--Plugin Initialization--> 
		<script type="text/javascript">
			$(document).ready(function () {
				$("#respMenu").aceResponsiveMenu({
					resizeWidth: '768', // Set the same in Media query       
					animationSpeed: 'fast', //slow, medium, fast
					accoridonExpAll: false //Expands all the accordion menu on click
				});
			});
		</script>
		<!-- Toast JavaScript --> 
		<script src="{{asset('dist/jquery-toast-plugin/jquery.toast.min.js')}}"></script>
		<script src="{{asset('dist/js/dashboard-data.js')}}"></script>
		<script src="{{asset('dist/js/dateheure.js')}}"></script>
	</body>
</html>
