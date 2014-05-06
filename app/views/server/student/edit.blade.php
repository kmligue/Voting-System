@extends('layout.menu')

@section('body')
	<div class="pageheader">
		<h2>
			<i class="fa fa-user"></i> Student
		</h2>
	</div>

	<div class="main">
		<div class="row">
			
			<div class="col-lg-12 col-md-12">
				<section class="tile color transparent-black">
					<div class="tile-header">
						<h1><strong>Add</strong> Student</h1>
					</div>

					<div class="tile-body">

						<?php

							if(Session::has('msg-error')) {
								echo '<div class="alert alert-red">' .
									Session::get('msg-error') .
									'</div>';
							}

							if($errors->first('name')) {
								echo '<div class="alert alert-red">' .
									$errors->first('name') .
									'</div>';
							}

							if($errors->first('mname')) {
								echo '<div class="alert alert-red">' .
									$errors->first('mname') .
									'</div>';
							}

							if($errors->first('lname')) {
								echo '<div class="alert alert-red">' .
									$errors->first('lname') .
									'</div>';
							}

							if($errors->first('course')) {
								echo '<div class="alert alert-red">' .
									$errors->first('course') .
									'</div>';
							}

						?>

						{{ Form::open(array('url' => '/student/' . $student->id, 'method' => 'put', 'class' => 'form-horizontal', 'role' => 'form', 'parsley-validate' => '', 'id' => 'basicvalidation')) }}

							<div class="form-group">
								<label for="fname" class="col-sm-4 control-label">First Name *</label>
								<div class="col-sm-6">
									{{ Form::text('fname', $student->fname, array('class' => 'form-control', 'id' => 'fname', 'parsley-trigger' => 'change', 'parsley-required' => 'true', 'style' => 'text-transform: capitalize')) }}
								</div>
							</div>

							<div class="form-group">
								<label for="mname" class="col-sm-4 control-label">Middle Name</label>
								<div class="col-sm-6">
									{{ Form::text('mname', $student->mname, array('class' => 'form-control', 'id' => 'mname', 'style' => 'text-transform: capitalize')) }}
								</div>
							</div>

							<div class="form-group">
								<label for="lname" class="col-sm-4 control-label">Last Name *</label>
								<div class="col-sm-6">
									{{ Form::text('lname', $student->lname, array('class' => 'form-control', 'id' => 'lname', 'parsley-trigger' => 'change', 'parsley-required' => 'true', 'style' => 'text-transform: capitalize')) }}
								</div>
							</div>

							<div class="form-group">
								<label for="course" class="col-sm-4 control-label">Course *</label>
								<div class="col-sm-6" id="selectbox">
									<select name="courseid" id="course" class="chosen-select chosen-transparent form-control" parsley-trigger="change" parsley-required="true" parsley-error-container="#selectbox">
										<option value="">Please choose</option>
										@foreach($courses as $course)
											<option value="{{ $course->id }}" <?php if(Input::old('courseid') == $course->id) echo 'selected'; else if($student->course_id == $course->id) echo 'selected'; ?>>{{ ucwords($course->name) }}</option>
										@endforeach
									</select>									
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