@extends('layout.main')

@section('css')
	{{ HTML::style('assets/css/vendor/bootstrap-checkbox.css') }}
@stop

@section('content')

	<div id="wrap">
		<div class="row">
			<div id="content" class="col-md-12 full-page login">
				
				<div class="inside-block">
					<h1 style="margin-top: 200px;"><strong>Student</strong> Login</h1>

					{{ Form::open(array('route' => 'store', 'id' => 'form-signin', 'class' => 'form-signin')) }}
					<section>

						<?php

							if(Session::has('error')) {
								echo '<p><i class="fa fa-warning"></i> ' . Session::get('error') . '</p>';
							}
							else if($errors->has('student')) {
								echo '<p>' . $errors->first('student') . '</p>';
							}

						?>

						<div class="form-group">
							<div class="col-sm-12" id="select-position" style="margin-bottom: 10px;">
								<select class="chosen-select chosen-transparent form-control" name="id">
										<option value="0">Student</option>
									@foreach($students as $student)
											<option value="{{ $student->id }}" <?php if(Input::old('id') == $student->id) echo 'selected'; ?>>{{ ucwords($student->fname) . ' ' . ucwords($student->mname) . ' ' . ucwords($student->lname) }}</option>
									@endforeach
								</select>
							</div>
						</div>
						<div class="input-group">
							{{ Form::password('password', array('placeholder' => 'Password', 'class' => 'form-control', 'style' => 'width: 91.6%; margin-left: 15px; text-align: center;')) }}
							<div class="input-group-addon" style="position: relative; left: -13px;"></div>
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

@section('script')
	<script>

		$(function() {
			$(".chosen-select").chosen({disable_search_threshold: 10});
		});
	</script>
@stop
