@extends('layout.main')

@section('content')
	<div class="large-4 medium-4 large-offset-4 medium-offset-4 columns login-container">
		<div class="login-header">
			<h1>cPanel</h1>
		</div>
		<hr />
		<div class="login-body large-12 columns">
			<span>
				{{ Session::get('error') }}
				{{ Session::get('logout') }}
				{{ $errors->first('username') }}
				{{ $errors->first('password') }}
			</span>
			{{ Form::open(array('route' => 'login.store')) }}
			{{ Form::hidden('route', Session::get('route')) }}
			{{ Form::text('username', '', array('placeholder' => 'Username', 'autofocus' => '')) }}
			{{ Form::password('password', array('placeholder' => 'Password')) }}
			{{ Form::submit('Login', array('class' => 'button success right')) }}
			{{ Form::close() }}
		</div>
	</div>
@stop
