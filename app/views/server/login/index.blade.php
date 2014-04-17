@extends('layout.main')

@section('css')
	{{ HTML::style('assets/css/vendor/bootstrap-checkbox.css') }}
@stop

@section('content')

	<div id="wrap">
		<div class="row">
			<div id="content" class="col-md-12 full-page login">
				
				<div class="inside-block">
					<h1><strong>c</strong>Panel</h1>
					<h5>Admin Login</h5>

					{{ Form::open(array('route' => 'login.store', 'id' => 'form-signin', 'class' => 'form-signin')) }}
					<section>

						<?php

							if(Session::has('error')) {
								echo '<p><i class="fa fa-warning"></i> ' . Session::get('error') . '</p>';
							}
							else if($errors->has('username')) {
								echo '<p>' . $errors->first('username') . '</p>';
							}

						?>

						<div class="input-group">
							{{ Form::text('username', '', array('placeholder' => 'Username', 'autofocus' => '', 'class' => 'form-control')) }}
							<div class="input-group-addon"><i class="fa fa-user"></i></div>
						</div>
						<div class="input-group">
							{{ Form::password('password', array('placeholder' => 'Password', 'class' => 'form-control')) }}
							<div class="input-group-addon"><i class="fa fa-key"></i></div>
						</div>
					</section>
					<section class="log-in">
						{{ Form::submit('Log In', array('class' => 'btn btn-greensea')) }}
					</section>
					{{ Form::close() }}
				</div>
			</div>
		</div>
	</div>
@stop
