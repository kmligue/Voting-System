@extends('layout.main2')

@section('content')
	
	@foreach($positions as $position)
		@if($position->course_id == null || $position->course_id == $student->course_id)
			<div>
				<h2><strong>{{ $position->name }}</strong></h2>
			</div>

			<div>
				@foreach($candidates as $candidate)
					@if($candidate->position_id == $position->id)
						<div>

							<div>
								<input type="radio" style="display: none;" name="{{ $position->name }}">
								<div><img class="img-circle" src="{{ $candidate->imagepath }}" style="width: 125px;"></div>
								<div><h3>{{ $candidate->fname . ' ' . $candidate->mname . ' ' . $candidate->lname }}</h3></div>
							</div>

						</div>
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