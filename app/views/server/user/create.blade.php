@extends('layout.menu')

@section('body')
	<div class="pageheader">
		<h2>
			<i class="fa fa-user"></i> System User
		</h2>
	</div>

	<div class="main">
		<div class="row">
			
			<div class="col-lg-12 col-md-12">
				<section class="tile color transparent-black">
					<div class="tile-header">
						<h1><strong>Create</strong> System User</h1>
					</div>

					<div class="tile-body">
						<div class="alert alert-big alert-redbrown alert-dismissable fade in">
							<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
							<h4><strong>Heads up!</strong></h4>
							<p>400 x 400 image dimension is preferable.</p>
						</div>	

					<?php
						if(Session::has('msg-error')) {
							echo '<div class="alert alert-red">' .
								Session::get('msg-error') .
								'</div>';
						}

						if($errors->first('image')) {
							echo '<div class="alert alert-red">' .
								$errors->first('image') .
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

						if($errors->first('password')) {
							echo '<div class="alert alert-red">' .
								$errors->first('password') .
								'</div>';
						}

					?>

						{{ Form::open(array('url' => '/user', 'method' => 'post', 'class' => 'form-horizontal', 'role' => 'form', 'parsley-validate' => '', 'id' => 'basicvalidation', 'enctype' => 'multipart/form-data')) }}
							<div class="form-group">
								<label for="image" class="col-sm-4 control-label">Upload *</label>
								<div class="col-sm-6">
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

							<div class="form-group">
								<label for="firstname" class="col-sm-4 control-label">First Name *</label>
								<div class="col-sm-6">
									{{ Form::text('fname', '', array('class' => 'form-control', 'id' => 'firstname', 'parsley-trigger' => 'change', 'parsley-required' => 'true', 'style' => 'text-transform: capitalize')) }}
								</div>
							</div>

							<div class="form-group">
								<label for="middlename" class="col-sm-4 control-label">Middle Name</label>
								<div class="col-sm-6">
									{{ Form::text('mname', '', array('class' => 'form-control', 'id' => 'middlename', 'style' => 'text-transform: capitalize')) }}
								</div>
							</div>

							<div class="form-group">
								<label for="lastname" class="col-sm-4 control-label">Last Name *</label>
								<div class="col-sm-6">
									{{ Form::text('lname', '', array('class' => 'form-control', 'id' => 'lastname', 'parsley-trigger' => 'change', 'parsley-required' => 'true', 'style' => 'text-transform: capitalize')) }}
								</div>
							</div>

							<div class="form-group">
								<label for="usertype" class="col-sm-4 control-label">User Type *</label>
								<div class="col-sm-6" id="selectbox">
									<select name="usertypeid" class="chosen-select chosen-transparent form-control" id="usertype" parsley-trigger="change" parsley-required="true" parsley-error-container="#selectbox">
										<option value="">Please choose</option>
										@foreach($usertypes as $usertype)
											<option value="{{ $usertype->id }}" <?php if(Input::old('usertypeid') == $usertype->id) echo 'selected'; ?>>{{ ucwords($usertype->name) }}</option>
										@endforeach
									</select>
								</div>
							</div>

							<div class="form-group">
								<label for="username" class="col-sm-4 control-label">Username *</label>
								<div class="col-sm-6">
									{{ Form::text('username', '', array('class' => 'form-control', 'id' => 'username', 'parsley-trigger' => 'change', 'parsley-required' => 'true', 'style' => 'text-transform: capitalize')) }}
								</div>
							</div>

							<div class="form-group">
								<label for="password" class="col-sm-4 control-label">Password</label>
								<div class="col-sm-6">
									{{ Form::password('password', '', array('class' => 'form-control', 'id' => 'password', 'parsley-trigger' => 'change', 'parsley-required' => 'true', 'parsley-minlength' => '6', 'parsley-validation-minlength' => '1', 'parsley-equalto' => '#retype-password')) }}
								</div>
							</div>

							<div class="form-group">
								<label for="retype-password" class="col-sm-4 control-label">Re-Type Password</label>
								<div class="col-sm-6">
									{{ Form::password('password_confirmation', '', array('class' => 'form-control', 'id' => 'retype-password', 'parsley-trigger' => 'change', 'parsley-required' => 'true', 'parsley-minlength' => '6', 'parsley-validation-minlength' => '1', 'parsley-equalto' => '#password')) }}
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