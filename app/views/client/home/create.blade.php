@extends('layout.main2')

@section('content')
	@if(count($candidates) >= 1)
		<div class="alert alert-info" style="margin: 20px;"><strong>Your candidates!</strong></div>
	@endif

	<?php $cnt = 0; ?>

	{{ Form::open(array('url' => 'home/' . Session::get('id'), 'method' => 'put', 'style' => 'margin-bottom: 20px;')) }}
		@foreach($candidates as $candidate)
			@if ($candidate->name != 'Senator')
				<div class="list-group" style="margin-top: 20px;">
					<a class="list-group-item active" style="background: #CA4252;">
						<h3>{{ $candidate->name }}</h3>
					</a>
					<a class="list-group-item" style="text-align: center;">
						<label for="{{ $candidate->id }}" style="text-align: center; margin: 35px;">
							<img class="img-circle" src="{{ $candidate->imagepath }}" style="width: 125px;">
							<div>
								{{ $candidate->fname . ' ' . $candidate->mname . ' ' . $candidate->lname }}
								<div>
									<input type="radio" checked id="{{ $candidate->id }}" value="{{ $candidate->id }}" name="{{ $candidate->name }}" style="display: none;">
								</div>
							</div>
						</label>
					</a>
				</div>
			@else
				@if($cnt == 0)
					<?php $cnt++; ?>
					<div class="list-group" style="margin-top: 20px;">
						<a class="list-group-item active" style="background: #CA4252;">
							<h3>{{ $candidate->name }}</h3>
						</a>
						<a class="list-group-item" style="text-align: center;">
							<label for="{{ $candidate->id }}" style="text-align: center; margin: 35px;">
								<img class="img-circle" src="{{ $candidate->imagepath }}" style="width: 125px;">
								<div>
									{{ $candidate->fname . ' ' . $candidate->mname . ' ' . $candidate->lname }}
									<div>
										<input type="radio" checked id="{{ $candidate->id }}" value="{{ $candidate->id }}" name="{{ $candidate->name . $cnt }}" style="display: none;">
									</div>
								</div>
							</label>
				@else
					<?php $cnt++; ?>
							<label for="{{ $candidate->id }}" style="text-align: center; margin: 35px;">
								<img class="img-circle" src="{{ $candidate->imagepath }}" style="width: 125px;">
								<div>
									{{ $candidate->fname . ' ' . $candidate->mname . ' ' . $candidate->lname }}
									<div>
										<input type="radio" checked id="{{ $candidate->id }}" value="{{ $candidate->id }}" name="{{ $candidate->name . $cnt }}" style="display: none;">
									</div>
								</div>
							</label>
				@endif

			@endif
		@endforeach
					</a>
				</div>
		@if(count($candidates) <= 0)
			<div class="alert alert-info" style="margin: 20px;"><strong>You have not voted any candidate!</strong></div>
		@endif

		<input type="submit" value="<?php echo count($candidates) <= 0 ?  'Continue' :  'Vote'; ?>" class="btn btn-danger" style="float: right;">
		<div style="clear: both;"></div>
	{{ Form::close() }}
@stop