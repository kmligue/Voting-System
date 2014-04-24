@extends('layout.menu')

@section('body')
	<div class="pageheader">
		<h2>
			<i class="fa fa-bookmark"></i> Course
		</h2>
	</div>

	<div class="main">
		<div class="row">
			
			<div class="col-lg-12 col-md-12">
				<section class="tile color transparent-black">
					<div class="tile-header">
						<h1><strong>Add</strong> Course</h1>
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

							if($errors->first('description')) {
								echo '<div class="alert alert-red">' .
									$errors->first('description') .
									'</div>';
							}

						?>

						{{ Form::open(array('url' => '/course', 'method' => 'post', 'class' => 'form-horizontal', 'role' => 'form', 'parsley-validate' => '', 'id' => 'basicvalidation')) }}

							<div class="form-group">
								<label for="name" class="col-sm-4 control-label">Name *</label>
								<div class="col-sm-6">
									{{ Form::text('name', '', array('class' => 'form-control', 'id' => 'name', 'parsley-trigger' => 'change', 'parsley-required' => 'true', 'style' => 'text-transform: uppercase')) }}
								</div>
							</div>

							<div class="form-group">
								<label for="description" class="col-sm-4 control-label">Description *</label>
								<div class="col-sm-6">
									{{ Form::text('description', '', array('class' => 'form-control', 'id' => 'description', 'style' => 'text-transform: capitalize')) }}
								</div>
							</div>

							<div class="form-group">
								<label class="col-sm-4 control-label">Representative</label>
								<div class="col-sm-8">
									<div class="checkbox check-transparent">
										{{ Form::checkbox('representative', '1', false, array('id' => 'rep')) }}
										<label for="rep">Enable representative position for this course</label>
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
		$(function() {

		})
	</script>
@stop