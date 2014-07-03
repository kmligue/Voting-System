@extends('layout.menu')

@section('body')
	<div class="pageheader">
		<h2>
			<i class="fa fa-user"></i> Position
		</h2>
	</div>

	<div class="main">
		<div class="row">
			
			<div class="col-lg-12 col-md-12">
				<section class="tile color transparent-black">
					<div class="tile-header">
						<h1><strong>Edit</strong> Position</h1>
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

							if($errors->first('ordinality')) {
								echo '<div class="alert alert-red">' .
									$errors->first('ordinality') .
									'</div>';
							}

						?>

						{{ Form::open(array('url' => '/position/' . $position->id, 'method' => 'put', 'class' => 'form-horizontal', 'role' => 'form', 'parsley-validate' => '', 'id' => 'basicvalidation')) }}

							<div class="form-group">
								<label for="name" class="col-sm-4 control-label">Name *</label>
								<div class="col-sm-6">
									{{ Form::text('name', $position->name, array('class' => 'form-control', 'id' => 'name', 'parsley-trigger' => 'change', 'parsley-required' => 'true', 'style' => 'text-transform: capitalize')) }}
								</div>
							</div>

							<div class="form-group">
								<label for="ordinality" class="col-sm-4 control-label">Ordinality *</label>
								<div class="col-sm-6">
									{{ Form::text('ordinality', $position->ordinality, array('class' => 'form-control', 'id' => 'ordinality', 'parsley-trigger' => 'change', 'parsley-required' => 'true', 'parsley-type' => 'number', 'placeholder' => 'Must be a number. The lower the number, the higher the priority.')) }}
								</div>
							</div>

							<div class="form-group">
								<label for="top" class="col-sm-4 control-label">Top *</label>
								<div class="col-sm-6">
									{{ Form::text('top', $position->top, array('class' => 'form-control', 'id' => 'top', 'parsley-trigger' => 'change', 'parsley-type' => 'number')) }}
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