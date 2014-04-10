@extends('layout.main')

@section('content')
	<div class="large-4 medium-8 large-offset-4 medium-offset-2 columns login-container">
		<div class="login-header">
			<h1>cPanel</h1>
		</div>

		<div class="login-body">
			{{ Form::label('username', 'Username') }}
			{{ Form::text('username', '', array('placeholder' => 'Enter your username', 'autofocus' => '')) }}
			{{ Form::label('password', 'Password') }}
			{{ Form::password('password') }}
		</div>
	</div>
@stop
