@extends('layout.main2')

@section('content')
	{{ Form::open(array('url' => 'home', 'method' => 'post', 'style' => 'margin-bottom: 20px;')) }}
		@foreach($candidates as $candidate)
			<div class="list-group" style="margin-top: 20px;">
				<a class="list-group-item active">
					<h2>{{ $candidate->name }}</h2>
				</a>
				<a class="list-group-item">
					<input type="radio" checked id="{{ $candidate->id }}" value="{{ $candidate->id }}" name="{{ $candidate->name }}" style="display: none;">
					<label for="{{ $candidate->id }}">
						<img class="img-circle" src="{{ $candidate->imagepath }}" style="width: 125px;">
						{{ $candidate->fname . ' ' . $candidate->mname . ' ' . $candidate->lname }}
					</label>
				</a>
			</div>
		@endforeach

		<input type="submit" value="Vote" class="btn btn-danger" style="float: right;">
		<div style="clear: both;"></div>
	{{ Form::close() }}
@stop