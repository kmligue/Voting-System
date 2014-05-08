@extends('layout.main')

@section('content')
	<!-- Fixed navbar -->
	<div class="navbar navbar-default navbar-fixed-top navbar-transparent-black mm-fixed-top" role="navigation" id="navbar">

		<!-- nav-collapse -->
		<div class="navbar-collapse">

			<div class="nav navbar-nav side-nav container" id="sidebar" tabindex="5000" style="overflow: hidden; outline: none; background: #717171; color: white;">
				Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
				tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
				quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
				consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
				cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
				proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
			</div>
		</div>
	</div>



	<div id="content" class="home" style="overflow: hidden; outline: none; 265px;">
		
		@foreach($positions as $position)
			@if($position->course_id == null || $position->course_id == $student->course_id)
				<div class="pageheader">
					<h2><strong>{{ $position->name }}</strong></h2>
				</div>

				<div class="main">
					<div class="row tile color transparent-black">
								
						<div class="col-lg-4 col-md-4" style="margin-top: 10px;">
							<div class="panel panel-transparent-black">
								<div class="panel-heading">
									<h3 class="panel-title">Greensea Panel title</h3>
								</div>
								<div class="panel-body">
									Panel content
								</div>
							</div>
						</div>

						<div class="col-lg-4 col-md-4" style="margin-top: 10px;">
							<div class="panel panel-transparent-black">
								<div class="panel-heading">
									<h3 class="panel-title">Greensea Panel title</h3>
								</div>
								<div class="panel-body">
									Panel content
								</div>
							</div>
						</div>

						<div class="col-lg-4 col-md-4" style="margin-top: 10px;">
							<div class="panel panel-transparent-black">
								<div class="panel-heading">
									<h3 class="panel-title">Greensea Panel title</h3>
								</div>
								<div class="panel-body">
									Panel content
								</div>
							</div>
						</div>

						<div class="col-lg-4 col-md-4" style="margin-top: 10px;">
							<div class="panel panel-transparent-black">
								<div class="panel-heading">
									<h3 class="panel-title">Greensea Panel title</h3>
								</div>
								<div class="panel-body">
									Panel content
								</div>
							</div>
						</div>

						<div class="col-lg-4 col-md-4" style="margin-top: 10px;">
							<div class="panel panel-transparent-black">
								<div class="panel-heading">
									<h3 class="panel-title">Greensea Panel title</h3>
								</div>
								<div class="panel-body">
									Panel content
								</div>
							</div>
						</div>

					</div>
				</div>
			@endif
		@endforeach

	</div>
@stop

@section('script')
	<script>
		
	</script>
@stop