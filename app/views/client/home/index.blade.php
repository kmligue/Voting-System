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
						@foreach($candidates as $candidate)
							@if($candidate->position_id == $position->id)
								<div class="col-lg-4 col-md-4 candidate" style="margin-top: 10px; margin-right: 10px; cursor: pointer;">
									<input type="radio" style="display: block;" name="{{ $position->name }}">
									<div class="panel panel-transparent-black">
										<div class="panel-heading">
											<h3 class="panel-title">{{ $candidate->fname . ' ' . $candidate->mname . ' ' . $candidate->lname }}</h3>
										</div>
										<div class="panel-body">
											<img src="{{ $candidate->imagepath }}" style="width: 411px;">
										</div>
									</div>
								</div>
							@endif
						@endforeach		

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