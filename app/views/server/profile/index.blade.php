@extends('layout.menu')

@section('body')
	<div class="pageheader">
		<h2>
			<i class="fa fa-user"></i> Profile
		</h2>
	</div>

	<div class="main">
		<div class="row">

			<div class="col-md-12 col-lg-4">
				<section class="tile color transparent-black">
					<div class="tile-header profile-picture">
						<h1><strong>Profile</strong> Picture</h1>
						<div class="controls">
							<a href="#" class="refresh">
								<i class="fa fa-refresh"></i>
							</a>
						</div>
					</div>

					<div class="tile-body">
						<div class="alert alert-big alert-redbrown alert-dismissable fade in">
							<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
							<h4><strong>Heads up!</strong></h4>
							<p>400 x 400 image dimension is preferable.</p>
						</div>	

						<?php
							if($errors->first('image')) {
								echo '<div class="alert alert-red">' .
									$errors->first('image') .
									'</div>';
							}

							if(Session::has('upload-error')) {
								echo '<div class="alert alert-red">' .
									Session::get('upload-error') .
									'</div>';
							}

							if(Session::has('upload-updated')) {
								echo '<div class="notification notification-success">' .
								'<h4>' . Session::get('upload-updated') . '</h4>' .
								'</div>';
							}
						?>

						{{ Form::open(array('url' => 'profile/' . Auth::user()->id, 'method' => 'put', 'class' => 'form-horizontal', 'role' => 'form', 'parsley-validate' => '', 'enctype' => 'multipart/form-data')) }}

							<img src="{{ Auth::user()->image }}" class="profile-pic img-responsive img-circle" alt style="width: 426px; height: 426px;">

							<div class="form-group">
								<label for="image" class="col-sm-4 control-label">Upload *</label>
								<div class="col-sm-8">
									<div class="input-group">
										<span class="input-group-btn">
											<span class="btn btn-primary btn-file" style="margin-bottom: 24px;">
												<i class="fa fa-upload"></i><input type="file" name="image" id="image">
											</span>
										</span>
										<input type="text" class="form-control image" readonly="" parsley-trigger="change" parsley-required="true" parsley-validation-minlength="1">
									</div>
								</div>
							</div>

							<div class="form-group form-footer">
								<div class="col-sm-offset-5 col-sm-7 col-md-offset-5 col-md-7 col-lg-offset-4 col-lg-8">
									<button type="submit" class="btn btn-primary">Submit</button>
									<button type="reset" class="btn btn-default">Reset</button>
								</div>
							</div>
						{{ Form::close() }}
					</div>
				</section>
			</div>

			<div class="col-lg-8 col-md-12">
				<section class="tile color transparent-black">
					<div class="tile-header profile-basic-credentials">
						<h1><strong>Basic</strong> Credentials</h1>
						<div class="controls">
							<a href="#" class="refresh">
								<i class="fa fa-refresh"></i>
							</a>
						</div>
					</div>

					<div class="tile-body">

					<?php
						if(Session::has('msg-profile-error')) {
							echo '<div class="alert alert-red">' .
								Session::get('msg-profile-error') .
								'</div>';
						}

						if($errors->first('first name')) {
							echo '<div class="alert alert-red">' .
								$errors->first('first name') .
								'</div>';
						}

						if($errors->first('last name')) {
							echo '<div class="alert alert-red">' .
								$errors->first('last name') .
								'</div>';
						}

						if($errors->first('user type')) {
							echo '<div class="alert alert-red">' .
								$errors->first('user type') .
								'</div>';
						}

						if($errors->first('username')) {
							echo '<div class="alert alert-red">' .
								$errors->first('username') .
								'</div>';
						}

						if(Session::has('msg-profile-updated')) {
							echo '<div class="notification notification-success">' .
								'<h4>' . Session::get('msg-profile-updated') . '</h4>' .
								'</div>';
						}
					?>

						{{ Form::open(array('url' => '/profile/' . Auth::user()->id, 'method' => 'put', 'class' => 'form-horizontal', 'role' => 'form', 'parsley-validate' => '', 'id' => 'basicvalidation')) }}
							<div class="form-group">
								<label for="firstname" class="col-sm-4 control-label">First Name *</label>
								<div class="col-sm-8">
									<input type="text" name="fname" class="form-control" id="firstname" parsley-trigger="change" parsley-required="true" value="{{ ucwords(Auth::user()->fname) }}">
								</div>
							</div>

							<div class="form-group">
								<label for="middlename" class="col-sm-4 control-label">Middle Name</label>
								<div class="col-sm-8">
									<input type="text" name="mname" class="form-control" id="middlename" value="{{ ucwords(Auth::user()->mname) }}">
								</div>
							</div>

							<div class="form-group">
								<label for="lastname" class="col-sm-4 control-label">Last Name *</label>
								<div class="col-sm-8">
									<input type="text" name="lname" class="form-control" id="lastname" parsley-trigger="change" parsley-required="true" value="{{ ucwords(Auth::user()->lname) }}">
								</div>
							</div>

							<div class="form-group">
								<label for="usertype" class="col-sm-4 control-label">User Type *</label>
								<div class="col-sm-8" id="selectbox">
									<select name="usertypeid" class="chosen-select chosen-transparent form-control" id="usertype" parsley-trigger="change" parsley-required="true" parsley-error-container="#selectbox">
										<option value="">Please choose</option>
										@foreach($usertypes as $usertype)
											<option value="{{ $usertype->id }}" <?php if(Auth::user()->usertypeid == $usertype->id) echo 'selected'; ?>>{{ ucwords($usertype->name) }}</option>
										@endforeach
									</select>
								</div>
							</div>

							<div class="form-group">
								<label for="username" class="col-sm-4 control-label">Username *</label>
								<div class="col-sm-8">
									<input type="text" name="username" class="form-control" id="username" parsley-trigger="change" parsley-required="true" parsley-minlength="6" parsley-validation-minlength="1" value="{{ Auth::user()->username }}">
								</div>
							</div>

							<div class="form-group form-footer">
								<div class="col-sm-offset-5 col-sm-7">
									<button type="submit" class="btn btn-primary">Submit</button>
									<button type="reset" class="btn btn-default">Reset</button>
								</div>
							</div>
						{{ Form::close() }}
					</div>
				</section>
			</div>

			<div class="col-md-12 col-lg-8">
				<section class="tile color transparent-black">
					<div class="tile-header">
						<h1><strong>Change</strong> Password</h1>
					</div>

					<div class="tile-body">

						<?php
							if(Session::has('msg-cpass-error')) {
								echo '<div class="alert alert-red">' .
									Session::get('msg-cpass-error') .
									'</div>';
							}

							if($errors->first('password')) {
								echo '<div class="alert alert-red">' .
									$errors->first('password') .
									'</div>';
							}

							if(Session::has('msg-cpass-updated')) {
								echo '<div class="notification notification-success">' .
									'<h4>' . Session::get('msg-cpass-updated') . '</h4>' .
									'</div>';
							}
						?>

						{{ Form::open(array('url' => '/profile/' . Auth::user()->id, 'method' => 'put', 'class' => 'form-horizontal', 'role' => 'form', 'parsley-validate' => '', 'id' => 'basicvalidation')) }}
							<div class="form-group">
								<label for="password" class="col-sm-4 control-label">Password *</label>
								<div class="col-sm-8">
									<input type="password" name="password" class="form-control" id="password" parsley-trigger="change" parsley-required="true" parsley-minlength="6" parsley-validation-minlength="1" parsley-equalto="#retype-password">
								</div>
							</div>

							<div class="form-group">
								<label for="retype-password" class="col-sm-4 control-label">Re-Type Password *</label>
								<div class="col-sm-8">
									<input type="password" name="password_confirmation" class="form-control" id="retype-password" parsley-trigger="change" parsley-required="true" parsley-minlength="6" parsley-validation-minlength="1" parsley-equalto="#password">
								</div>
							</div>

							<div class="form-group form-footer">
								<div class="col-sm-offset-5 col-sm-7">
									<button type="submit" class="btn btn-primary">Submit</button>
									<button type="reset" class="btn btn-default">Reset</button>
								</div>
							</div>
						{{ Form::close() }}
					</div>
				</section>
			</div>
		</div>
	</div>
@stop

@section('script')

	<script>
		$(document) 
    		.on('change', '.btn-file :file', function() {
    			var input = $(this),
    			numFiles = input.get(0).files ? input.get(0).files.length : 1,
    			label = input.val().replace(/\\/g, 'http://tattek.com/').replace(/.*\//, '');
    			input.trigger('fileselect', [numFiles, label]);
    	 });

		$(function() {
			$('.btn-file :file').on('fileselect', function(event, numFiles, label) {
    			var input = $(this).parents('.input-group').find(':text'),
    			log = numFiles > 1 ? numFiles + ' files selected' : label;

    			if(input.length) {
    				input.val(log);
    			}
    			else {
    				if(log) alert(log);
    			}
    		});

			$(".chosen-select").chosen({disable_search_threshold: 10});
		});

	</script>
@stop