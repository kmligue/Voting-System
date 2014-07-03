@extends('layout.main2')

@section('content')
	<?php

		$cnt = 0;

		if(Session::has('error')) {
			echo '<div class="alert alert-danger"><strong>'. Session::get('error') .'</strong></div>';
		}

	?>
	
	{{ Form::open(array('url' => 'home', 'method' => 'post', 'style' => 'margin-bottom: 20px;')) }}
		@foreach($positions as $position)
			@if($position->course_id == null || $position->course_id == $student->course_id)
				<div class="list-group" style="margin-top: 20px;">
					<a class="list-group-item active" style="background: #CA4252;">
						<h3>{{ $position->name }}</h3>
						<span>Select {{ $position->top }} candidate/s</span>
					</a>
					<a class="list-group-item">
					@foreach($candidates as $candidate)
						@if($candidate->position_id == $position->id && $position->name != 'Senator')
							<label for="{{ $candidate->id }}" style="text-align: center; margin: 35px;">
								<img class="img-circle" src="{{ $candidate->imagepath }}" style="width: 125px;">
								<div>
									{{ $candidate->fname . ' ' . $candidate->mname . ' ' . $candidate->lname }}
									<div>
										<input type="radio" id="{{ $candidate->id }}" value="{{ $candidate->id }}" name="{{ $position->name }}" style="width: 1.5em; height: 1.5em;">
									</div>
								</div>
							</label>
						@elseif($candidate->position_id == $position->id && $position->name == 'Senator')

							<?php $cnt++; ?>

							<label for="{{ $candidate->id }}" style="text-align: center; margin: 35px;">
								<img class="img-circle" src="{{ $candidate->imagepath }}" style="width: 125px;">
								<div>
									{{ $candidate->fname . ' ' . $candidate->mname . ' ' . $candidate->lname }}
									<div>
										<input class="senator" type="checkbox" id="{{ $candidate->id }}" value="{{ $candidate->id }}" name="{{ $position->name . $cnt }}" style="width: 1.5em; height: 1.5em;">
									</div>
								</div>
							</label>
						@endif
					@endforeach	
					</a>
				</div>	
			@endif
		@endforeach

		<input type="submit" value="Submit" class="btn btn-danger" style="float: right;">
		<div style="clear: both;"></div>
	{{ Form::close() }}
@stop

@section('script')
	<script>
		$(function() {
			var limit = <?php
					foreach ($senator_cnt as $key => $value) {
						echo $value->top;
					}

			?>

			$('input.senator').on('change', function(evt) {
			   	if($('input.senator:checked').length > limit) {
			    	this.checked = false;
			   }
			});
		})
	</script>
@stop