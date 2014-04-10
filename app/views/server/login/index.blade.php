@extends('layout.main')

@section('content')
	<div class="large-4 medium-8 large-offset-4 medium-offset-2 columns login-container">
		<div class="login-header">
			<h1>cPanel</h1>
		</div>

		<div class="login-body large-12 columns">
			<span>
				<h5>{{ Session::get('error') }}</h5>
				<h5>{{ Session::get('logout') }}</h5>
				<h5>{{ $errors->first('username') }}</h5>
				<h5>{{ $errors->first('password') }}</h5>
			</span>
			{{ Form::open(array('route' => 'login.store')) }}
			{{ Form::hidden('route', Session::get('route')) }}
			{{ Form::label('username', 'Username') }}
			{{ Form::text('username', '', array('placeholder' => 'Enter your username', 'autofocus' => '')) }}
			{{ Form::label('password', 'Password') }}
			{{ Form::password('password') }}
			{{ Form::submit('Login', array('class' => 'button right')) }}
			{{ Form::close() }}
		</div>
	</div>
@stop
