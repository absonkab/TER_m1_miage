<!-- Logo --> 
<a href="index.html" class="logo blue-bg"> 
    <!-- mini logo for sidebar mini 50x50 pixels --> 
    <span class="logo-mini"><img src="dist/img/logo-n.png" alt=""></span> 
    <!-- logo for regular state and mobile devices --> 
    <span class="logo-lg"><img src="dist/img/logo.png" alt=""></span>
</a> 
<!-- Header Navbar: style can be found in header.less -->
<nav class="navbar blue-bg navbar-static-top"> 
	<!-- Sidebar toggle button-->
	<div class="pull-left search-box">
		<form action="#" method="get" class="search-form">
			<div class="input-group">
				<input name="search" class="form-control" placeholder="Search..." type="text">
				<span class="input-group-btn">
					<button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i></button>
				</span>
			</div>
		</form>
		<!-- search form --> 
	</div>
	<div class="navbar-custom-menu">
		<ul class="nav navbar-nav">
			<!-- Messages: style can be found in dropdown.less-->
			<li class="dropdown messages-menu"> 
				<a href="#" class="dropdown-toggle" data-toggle="dropdown"> <i class="fa fa-envelope-o"></i>
					<div class="notify"> <span class="heartbit"></span> <span class="point"></span> </div>
				</a>
				<ul class="dropdown-menu">
					<li class="header">You have 4 new messages</li>
					<li>
						<ul class="menu">
							<li>
								<a href="#">
									<div class="pull-left"><img src="dist/img/img1.jpg" class="img-circle" alt="User Image"> <span class="profile-status online pull-right"></span></div>
									<h4>Alex C. Patton</h4>
									<p>I've finished it! See you so...</p>
									<p><span class="time">9:30 AM</span></p>
								</a>
							</li>
						</ul>
					</li>
					<li class="footer"><a href="#">View All Messages</a></li>
				</ul>
			</li>
			<!-- Notifications: style can be found in dropdown.less -->
			<li class="dropdown messages-menu"> <a href="#" class="dropdown-toggle" data-toggle="dropdown"> <i class="fa fa-bell-o"></i>
				<div class="notify"> <span class="heartbit"></span> <span class="point"></span> </div>
				</a>
				<ul class="dropdown-menu">
					<li class="header">Notifications</li>
					<li>
						<ul class="menu">
							<li><a href="#">
								<div class="pull-left icon-circle red"><i class="icon-lightbulb"></i></div>
								<h4>Alex C. Patton</h4>
								<p>I've finished it! See you so...</p>
								<p><span class="time">9:30 AM</span></p>
								</a>
							</li>
						</ul>
					</li>
					<li class="footer"><a href="#">Check all Notifications</a></li>
				</ul>
			</li>
			<!-- User Account: style can be found in dropdown.less -->
			<li class="dropdown user user-menu p-ph-res"> <a href="#" class="dropdown-toggle" data-toggle="dropdown"> <img src="dist/img/img1.jpg" class="user-image" alt="User Image"> <span class="hidden-xs">{{ Auth::user()->name }}</span> </a>
				<ul class="dropdown-menu">
				<li class="user-header">
					<p class="text-left">{{ Auth::user()->name }} <small>{{ Auth::user()->email }}</small> </p>
					<div class="view-link text-left"><a href="#">Voir Profile</a> </div>
				</li>
				<li role="separator" class="divider"></li>
				<li><a href="#"><i class="icon-gears"></i>Paramètre du compte</a></li>
				<li role="separator" class="divider"></li>
				<li><a href="{{ route('logout') }}"><i class="fa fa-power-off"></i>{{ __('Se déconnecter') }}</a></li>
				</ul>
			</li>
		</ul>
	</div>
</nav>

@if(session('success'))
    <div class="container">
<div class="alert alert-success">
    {{ session('success') }}
</div>
</div>
@endif

@if(session('error'))
    <div class="container">
<div class="alert alert-danger">
    {{ session('error') }}
</div>
</div>
@endif