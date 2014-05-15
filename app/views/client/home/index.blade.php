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
		<div class="form-group"> 
		
		@foreach($positions as $position)
			@if($position->course_id == null || $position->course_id == $student->course_id)
				<label>{{ $position->name }}</label>

				<div class="col-sm-8">
					@foreach($candidates as $candidate)
						@if($candidate->position_id == $position->id)
							<div class="radio radio-transparent">
								<input type="radio" id="{{ $candidate->id }}" name="{{ $position->name }}">
								<label for="{{ $candidate->id }}">{{ ucwords($candidate->fname) . ' ' . ucwords($candidate->mname) . ' ' . ucwords($candidate->lname) }}</label>
								<img src="{{ $candidate->imagepath }}" style="width: 125px;">
							</div>
						@endif
					@endforeach		

				</div>
			@endif
		@endforeach

		</div>
	</div>
@stop

@section('script')
	<script>
		
	</script>
@stop