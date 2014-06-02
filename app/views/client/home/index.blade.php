@extends('layout.main2')

@section('content')
	<?php

		if(Session::has('error')) {
			echo '<div class="alert alert-danger"><strong>'. Session::get('error') .'</strong></div>';
		}

	?>
	
	{{ Form::open(array('url' => 'home', 'method' => 'post', 'style' => 'margin-bottom: 20px;')) }}
		@foreach($positions as $position)
			@if($position->course_id == null || $position->course_id == $student->course_id)
				<div class="list-group" style="margin-top: 20px;">
					<a class="list-group-item active">
						<h2>{{ $position->name }}</h2>
					</a>

					@foreach($candidates as $candidate)
						@if($candidate->position_id == $position->id)
							<a class="list-group-item">
								<input type="radio" id="{{ $candidate->id }}" value="{{ $candidate->id }}" name="{{ $position->name }}" style="width: 1.5em; height: 1.5em;">
								<label for="{{ $candidate->id }}">
									<img class="img-circle" src="{{ $candidate->imagepath }}" style="width: 125px;">
									{{ $candidate->fname . ' ' . $candidate->mname . ' ' . $candidate->lname }}
								</label>
							</a>
						@endif
					@endforeach	
				</div>	
			@endif
		@endforeach

		<input type="submit" value="Submit" class="btn btn-danger" style="float: right;">
		<div style="clear: both;"></div>
	{{ Form::close() }}
@stop