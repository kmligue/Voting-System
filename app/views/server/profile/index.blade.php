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
					<div class="tile-header">
						<h1><strong>Profile</strong> Picture</h1>
						<div class="controls">
							<a href="#" class="refresh">
								<i class="fa fa-refresh"></i>
							</a>
						</div>
					</div>

					<div class="tile-body">
						<form class="form-horizontal" role="form" parsley-validate>
							<img src="{{ Auth::user()->image }}" class="profile-pic img-responsive img-circle" alt>

							<div class="form-group">
								<label for="colorpicker-rgb" class="col-sm-4 control-label">Upload</label>
								<div class="col-sm-8">
									<div class="input-group">
										<span class="input-group-btn">
											<span class="btn btn-primary btn-file">
												<i class="fa fa-upload"></i><input type="file">
											</span>
										</span>
										<input type="text" class="form-control" readonly="">
									</div>
								</div>
							</div>

							<div class="form-group form-footer">
								<div class="col-sm-offset-5 col-sm-7 col-md-offset-5 col-md-7 col-lg-offset-4 col-lg-8">
									<button type="submit" class="btn btn-primary">Submit</button>
									<button type="reset" class="btn btn-default">Reset</button>
								</div>
							</div>
						</form>
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
						<form class="form-horizontal" role="form" parsley-validate id="basicvalidation">
							<div class="form-group">
								<label for="firstname" class="col-sm-4 control-label">First Name *</label>
								<div class="col-sm-8">
									<input type="text" name="fname" class="form-control" id="firstname" parsley-trigger="change" parsley-required="true" value="{{ Auth::user()->fname }}">
								</div>
							</div>

							<div class="form-group">
								<label for="middlename" class="col-sm-4 control-label">Middle Name</label>
								<div class="col-sm-8">
									<input type="text" name="mname" class="form-control" id="middlename" value="{{ Auth::user()->mname }}">
								</div>
							</div>

							<div class="form-group">
								<label for="lastname" class="col-sm-4 control-label">Last Name *</label>
								<div class="col-sm-8">
									<input type="text" name="lname" class="form-control" id="lastname" parsley-trigger="change" parsley-required="true" value="{{ Auth::user()->lname }}">
								</div>
							</div>

							<div class="form-group">
								<label for="usertype" class="col-sm-4 control-label">User Type *</label>
								<div class="col-sm-8">
									<select name="usertypeid" class="chosen-select chosen-transparent form-control" id="usertype" parsley-trigger="change" parsley-required="true">
										<option value="">Please choose</option>
										@foreach($usertypes as $usertype)
											<option value="{{ $usertype->id }}">{{ ucwords($usertype->name) }}</option>
										@endforeach
									</select>
								</div>
							</div>

							<div class="form-group">
								<label for="username" class="col-sm-4 control-label">Username *</label>
								<div class="col-sm-8">
									<input type="text" name="username" class="form-control" id="username" parsley-trigger="change" parsley-required="true" value="{{ Auth::user()->username }}">
								</div>
							</div>

							<div class="form-group form-footer">
								<div class="col-sm-offset-5 col-sm-7">
									<button type="submit" class="btn btn-primary">Submit</button>
									<button type="reset" class="btn btn-default">Reset</button>
								</div>
							</div>
						</form>
					</div>
				</section>
			</div>

			<div class="col-md-12 col-lg-8">
				<section class="tile color transparent-black">
					<div class="tile-header">
						<h1><strong>Change</strong> Password</h1>
					</div>

					<div class="tile-body">
						<form class="form-horizontal" role="form" parsley-validate id="basicvalidation">
							<div class="form-group">
								<label for="password" class="col-sm-4 control-label">Password *</label>
								<div class="col-sm-8">
									<input type="password" name="password" class="form-control" id="password" parsley-trigger="change" parsley-required="true" parsley-minlength="6" parsley-validation-minlength="1" parsley-equalto="#retype-password">
								</div>
							</div>

							<div class="form-group">
								<label for="retype-password" class="col-sm-4 control-label">Re-Type Password *</label>
								<div class="col-sm-8">
									<input type="password" name="retype-password" class="form-control" id="retype-password" parsley-trigger="change" parsley-required="true" parsley-minlength="6" parsley-validation-minlength="1" parsley-equalto="#password">
								</div>
							</div>

							<div class="form-group form-footer">
								<div class="col-sm-offset-5 col-sm-7">
									<button type="submit" class="btn btn-primary">Submit</button>
									<button type="reset" class="btn btn-default">Reset</button>
								</div>
							</div>
						</form>
					</div>
				</section>
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