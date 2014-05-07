@extends('layout.menu')

@section('body')
	<div class="pageheader">
		<h2>
			<i class="fa fa-user"></i> Candidate
		</h2>
	</div>

	<div class="main">
		<div class="row">
			
			<div class="col-lg-12 col-md-12">
				<section class="tile color transparent-black">
					<div class="tile-header">
						<h1><strong>Add</strong> Candidate</h1>
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

							if($errors->first('student')) {
								echo '<div class="alert alert-red">' .
									$errors->first('student') .
									'</div>';
							}

							if($errors->first('position')) {
								echo '<div class="alert alert-red">' .
									$errors->first('position') .
									'</div>';
							}

							if($errors->first('image')) {
								echo '<div class="alert alert-red">' .
									$errors->first('image') .
									'</div>';
							}

						?>

						{{ Form::open(array('url' => '/candidate/' . $candidate->id, 'method' => 'put', 'class' => 'form-horizontal', 'role' => 'form', 'parsley-validate' => '', 'id' => 'basicvalidation', 'enctype' => 'multipart/form-data')) }}

							<div class="form-group">
								<label for="student" class="col-sm-4 control-label">Student *</label>
								<div class="col-sm-6" id="select-student">
									<select name="studentid" class="chosen-select chosen-transparent form-control" id="student" parsley-trigger="change" parsley-required="true" parsley-error-container="#select-student" disabled>
										<option value="">Please choose</option>
										@foreach($students as $student)
											<option value="{{ $student->id }}" <?php if(Input::old('studentid') == $student->id) echo 'selected'; else if($candidate->student_id == $student->id) echo 'selected'; ?>>{{ ucwords($student->fname) . ' ' . ucwords($student->mname) . ' ' . ucwords($student->lname) }}</option>
										@endforeach
									</select>
								</div>
							</div>

							<div class="form-group">
								<label for="position" class="col-sm-4 control-label">Position *</label>
								<div class="col-sm-6" id="select-position">
									<select name="positionid" class="chosen-select chosen-transparent form-control" id="position" parsley-trigger="change" parsley-required="true" parsley-error-container="#select-position">
										<option value="">Please choose</option>
										@foreach($positions as $position)
											<option value="{{ $position->id }}" <?php if(Input::old('positionid') == $position->id) echo 'selected'; else if($candidate->position_id == $position->id) echo 'selected'; ?>>{{ ucwords($position->name) }}</option>
										@endforeach
									</select>
								</div>
							</div>

							<div class="form-group">
								<label for="image" class="col-sm-4 control-label">Upload</label>
								<div class="col-sm-6">
									<div class="input-group">
										<span class="input-group-btn">
											<span class="btn btn-primary btn-file" style="margin-bottom: 24px;">
												<i class="fa fa-upload"></i><input type="file" name="image" id="image">
											</span>
										</span>
										<input type="text" class="form-control image" readonly="" parsley-trigger="change" parsley-validation-minlength="1">
									</div>
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