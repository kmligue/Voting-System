@extends('layout.main2')

@section('content')
	
	@foreach($positions as $position)
		@if($position->course_id == null || $position->course_id == $student->course_id)
			<div class="list-group" style="margin-top: 20px;">
				<a class="list-group-item active">
					<h2>{{ $position->name }}</h2>
				</a>

				@foreach($candidates as $candidate)
					@if($candidate->position_id == $position->id)
						<a class="list-group-item">
							<input type="radio" id="{{ $candidate->id }}" name="{{ $position->name }}" style="width: 1.5em; height: 1.5em;">
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

@stop

@section('script')
	<script>
		
	</script>
@stop