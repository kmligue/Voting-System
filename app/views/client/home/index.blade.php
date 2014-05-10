@extends('layout.main')

@section('content')

	<!-- Fixed navbar -->
	<div class="navbar navbar-default navbar-fixed-top navbar-transparent-black mm-fixed-top" role="navigation" id="navbar">

		<!-- nav-collapse -->
		<div class="navbar-collapse">
			
			<div class="nav navbar-nav side-nav side-ad" id="sidebar" tabindex="5000" style="overflow: hidden; outline: none;">
				
			</div>
			
		</div>
	</div>

	<div class="container" id="content" style="overflow: hidden; outline: none; 265px;">
		
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