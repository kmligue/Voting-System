@extends('layout.menu')

@section('body')
	<div class="row field-wrapper">

		<div class="large-12 medium-12 columns">
			<h1>User Profile</h1>
		</div>

		<div class="large-12 medium-12 columns">
			<span>
				<h5>{{ Session::get('msg-profile') }}</h5>
				<h5>{{ $errors->first('fname') }}</h5>
				<h5>{{ $errors->first('lname') }}</h5>
				<h5>{{ $errors->first('usertypeid') }}</h5>
				<h5>{{ $errors->first('username') }}</h5>
			</span>
			{{ Form::open(array('url' => 'profile/' . Auth::user()->id, 'method' => 'put', 'class' => 'form-profile')) }}
				<div class="large-4 medium-4 columns">
					{{ Form::label('fname', 'First Name') }}
					{{ Form::text('fname', ucwords(Auth::user()->fname)) }}
				</div>
				<div class="large-4 medium-4 columns">
					{{ Form::label('mname', 'Middle Name') }}
					{{ Form::text('mname', ucwords(Auth::user()->mname)) }}
				</div>
				<div class="large-4 medium-4 columns">
					{{ Form::label('lname', 'Last Name') }}
					{{ Form::text('lname', ucwords(Auth::user()->lname)) }}
				</div>
				<div class="large-8 medium-8 columns">
					{{ Form::label('usertypeid', 'User Type') }}

					@foreach($usertypes as $usertype)
						<?php $utype[$usertype->id] = ucfirst($usertype->name); ?>
					@endforeach

					{{ Form::select('usertypeid', $utype, Auth::user()->usertypeid) }}
				</div>
				<div class="large-8 medium-8 columns left">
					{{ Form::label('username', 'Username') }}
					{{ Form::text('username', Auth::user()->username) }}
				</div>
				<div class="large-12 medium-12 columns">
					{{ HTML::link('dashboard', 'Cancel', array('class' => 'right button alert')) }}
					{{ Form::submit('Update', array('class' => 'right button success', 'disabled' => 'true')) }}
				</div>
			{{ Form::close() }}
		</div>

	</div>

	<div class="row field-wrapper">

		<div class="large-12 medium-12 columns">
			<h1>Change Password</h1>
		</div>

		<div class="large-12 medium-12 columns">
			<span>
				<h5>{{ Session::get('msg-cpass') }}</h5>
				<h5>{{ $errors->first('password') }}</h5>
				<h5>{{ $errors->first('retype') }}</h5>
			</span>

			{{ Form::open(array('url' => 'profile/' . Auth::user()->id, 'method' => 'put', 'class' => 'form-cpass')) }}
				<div class="large-8 medium-8 columns">
					{{ Form::label('password', 'Password') }}
					{{ Form::password('password') }}
					<i class="fa fa-warning p-warning"></i>
				</div>
				<div class="large-8 medium-8 columns left">
					{{ Form::label('retype', 'Retype New Password') }}
					{{ Form::password('retype') }}
					<i class="fa fa-warning r-warning"></i>
				</div>
				<div class="large-12 medium-12 columns">
					{{ HTML::link('dashboard', 'Cancel', array('class' => 'right button alert')) }}
					{{ Form::submit('Update', array('class' => 'right button success', 'disabled' => 'true')) }}
				</div>
			{{ Form::close() }}
		</div>

	</div>
@stop

@section('script')
	@parent

	<script type="text/javascript">

		(function() {
			var password = $('#password');
			var retype = $('#retype');
			var pwarning = $('.p-warning');
			var rwarning = $('.r-warning');
			var pass_warning_msg = $('.pass-warning');
			var fname = $('input[name="fname"]');
			var lname = $('input[name="lname"]');
			var username = $('input[name="username"]');

			password.on('keyup', function() {
				checkPasswordEquality();
			})

			password.on('focusout', function() {
				checkPasswordEquality();
			});

			retype.on('keyup', function() {
				checkPasswordEquality();
			})

			retype.on('focusout', function() {
				checkPasswordEquality();
			});

			var checkPasswordEquality = function() {
				pwarning.css('visibility', 'hidden');
				rwarning.css('visibility', 'hidden');

				if(password.val() != '' && retype.val() != '') {
					if(password.val() != retype.val()) {
						pwarning.css('visibility', 'visible');
						rwarning.css('visibility', 'visible');
					}

					if(password.val() == retype.val()) {
						pwarning.css('visibility', 'hidden');
						rwarning.css('visibility', 'hidden');
					}
				}

				if(password.val() != '' && retype.val() == '') {
					rwarning.css('visibility', 'visible');
				}

				if(password.val() == '' && retype.val() != '') {
					pwarning.css('visibility', 'visible');
				}

			}

			// enable update button when profile form is populated
			$('.form-profile').find('input[name="fname"], input[name="mname"] input[name="lname"], input[name="username"]').each(function() {
				$(this).on('keyup', function() {
					if(fname.val() != '' && lname.val() != '' && username.val() != '') {
						$('.form-profile input[type="submit"]').removeAttr('disabled');
					}
					else {
						$('.form-profile input[type="submit"]').attr('disabled', 'true');
					}
				})
			})

			// enable update button when cpass form is populated
			$('.form-cpass').find('input[name="password"], input[name="retype"]').each(function() {
				$(this).on('keyup', function() {
					if(password.val() != '' && retype.val() != '') {
						$('.form-cpass input[type="submit"]').removeAttr('disabled');
					}
					else {
						$('.form-cpass input[type="submit"]').attr('disabled', 'true');
					}
				})
			})

			$('.form-profile').on('submit', function() {
				$('.form-profile input[type="submit"]').attr('disabled', 'true');
			})

			$('.form-cpass').on('submit', function() {
				$('.form-cpass input[type="submit"]').attr('disabled', 'true');
			})
		})(jQuery)

	</script>
@stop