@extends('layout.main')

@section('content')
<!-- Fixed navbar -->
<div class="navbar navbar-default navbar-fixed-top navbar-transparent-black mm-fixed-top" role="navigation" id="navbar">
	
	<!-- Branding -->
	<div class="navbar-header col-md-2">
		<a href="#" class="navbar-brand">
			<strong>Voting</strong> System
		</a>
		<div class="sidebar-collapse">
			<a href="#">
				<i class="fa fa-bars"></i>
			</a>
		</div>
	</div>
	<!-- Branding end -->

	<!-- nav-collapse -->
	<div class="navbar-collapse">

		<ul class="nav navbar-nav quick-actions">
			<li class="dropdown divided user" id="current-user">
				<div class="profile-photo">
					<img src="{{ Auth::user()->image }}" alt="">
				</div>
				<a class="dropdown-toggle options" data-toggle="dropdown" href="#">
					{{ ucwords(Auth::user()->fname . ' ' . Auth::user()->lname) }} <i class="fa fa-caret-down"></i>
				</a>

				<ul class="dropdown-menu arrow settings">

					<li>
						<a href="/profile"><i class="fa fa-user"></i> Profile</a>
					</li>

					<li class="divider"></li>

					<li>
						<a href="/logout"><i class="fa fa-power-off"></i> Logout</a>
					</li>
				</ul>
			</li>
		</ul>

		<ul class="nav navbar-nav side-nav" id="sidebar" tabindex="5000" style="overflow: hidden; outline: none;">
			<li class="collapsed-content">
				<ul>
					<li class="search"></li>
				</ul>
			</li>
			<li class="navigation" id="navigation">
				<a href="#" class="sidebar-toggle" data-toggle="#navigation">Navigation <i class="fa fa-angle-up"></i></a>

				<ul class="menu">
					<li>
						<a href="/dashboard">
							<i class="fa fa-tachometer"></i> Dashboard
						</a>
					</li>
					<li class="dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown">
							<i class="fa fa-file"></i> File <b class="fa fa-plus dropdown-plus"></b>
						</a>
						<ul class="dropdown-menu">
							<li>
								<a href="#">
									<i class="fa fa-caret-right"></i> Student
								</a>
							</li>
							<li>
								<a href="#">
									<i class="fa fa-caret-right"></i> Course
								</a>
							</li>
							<li>
								<a href="#">
									<i class="fa fa-caret-right"></i> Position
								</a>
							</li>
							<li>
								<a href="#">
									<i class="fa fa-caret-right"></i> Candidate
								</a>
							</li>
							<li>
								<a href="/user">
									<i class="fa fa-caret-right"></i> System User
								</a>
							</li>
						</ul>
					</li>
					<li class="dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown">
							<i class="fa fa-cogs"></i> Transaction <b class="fa fa-plus dropdown-plus"></b>
						</a>

						<ul class="dropdown-menu">
							<li>
								<a href="#">
									<i class="fa fa-caret-right"></i> UI Elements
								</a>
							</li>
							<li>
								<a href="#">
									<i class="fa fa-caret-right"></i> Typography
								</a>
							</li>
							<li>
								<a href="#">
									<i class="fa fa-caret-right"></i> Tiles
								</a>
							</li>
						</ul>
					</li>

					<li>
						<a href="#">
							<i class="fa fa-folder-open"></i> Inquiry
						</a>
					</li>
					<li>
						<a href="#">
							<i class="fa fa-print"></i> Report
						</a>
					</li>
				</ul>
			</li>
		</ul>
	</div>
</div>

            

<div id="content" class="col-md-12" tabindex="5001" style="overflow: hidden; outline: none; padding-left: 265px;">
		
	@yield('body')

</div>

@stop