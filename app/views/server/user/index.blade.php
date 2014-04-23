@extends('layout.menu')

@section('body')
	<div class="pageheader">
		<h2>
			<i class="fa fa-user"></i> System User
		</h2>
	</div>

	<div class="main">
		<div class="row">

			<div class="col-md-12">

				<section class="tile transparent">

					<div class="tile-header transparent">
						<h1><strong>User</strong> Table</h1>
						<div class="controls">
							<a href="#" class="refresh"><i class="fa fa-refresh"></i></a>
						</div>
					</div>
			
					<div class="tile-body color transparent-black rounded-corners">
						
						<?php

							if($errors->first('first name')) {
								echo '<div class="alert alert-red">' .
									$errors->first('first name') .
									'</div>';
							}

							if($errors->first('middle name')) {
								echo '<div class="alert alert-red">' .
									$errors->first('middle name') .
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

							if($errors->first('password_confirmation')) {
								echo '<div class="alert alert-red">' .
									$errors->first('password_confirmation') .
									'</div>';
							}

							if(Session::has('msg-error')) {
								echo '<div class="alert alert-red">' .
									Session::get('msg-error') .
									'</div>';
							}

							if(Session::has('msg-success')) {
								echo '<div class="notification notification-success">' .
								'<h4>' . Session::get('msg-success') . '</h4>' .
								'</div>';
							}

						?>
						{{ Input::get('fname') }}
						<div class="table-responsive">
							<table class="table table-datatable table-custom" id="inlineEditDataTable">
								<thead>
									<tr>
										<th class="sort-alpha">Name</th>
										<th class="sort-alpha">User Type</th>
										<th class="sort-amount">Username</th>
										<th class="sort-numeric">Profile Image</th>
										@if(Auth::user()->usertypeid == 1)
											<th class="no-sort">Actions</th>
										@endif
									</tr>
								</thead>
								<tbody>

									@foreach($users as $user)
										<tr>
											<td class="text-center">{{ ucwords($user->user) }}</td>
											<td class="text-center">{{ ucwords($user->usertype) }}</td>
											<td class="text-center">{{ $user->username }}</td>
											<td class="text-center"><img src="{{ $user->image }}" style="width: 30px; height: 30px;"></td>
											@if(Auth::user()->usertypeid == 1)
												<td class="actions text-center"><a class="edit" href="#editModalDialog" data-toggle="modal" id="{{ $user->id }}">Edit</a><a class="delete" href="#">Delete</a></td>
											@endif
										</tr>
									@endforeach
								</tbody>
							</table>
						</div>

					</div>

				</section>

			</div>

			<div class="modal fade" id="addModalDialog" tabindex="-1" role="dialog" aria-labelledby="modalDialogLabel" aria-hidden="true">
				<div class="modal-dialog">
					<div class="modal-content">
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal" aria-hidden="true">Close</button>
							<h3 class="modal-title" id="modalDialogLabel"><strong>Add</strong> System User</h3>
						</div>

						{{ Form::open(array('url' => '/user', 'method' => 'post', 'class' => 'form-horizontal', 'role' => 'form', 'parsley-validate' => '', 'enctype' => 'multipart/form-data')) }}

						<div class="modal-body">

							<div class="form-group">
								<label for="image">Upload *</label>
								<div class="input-group">
									<span class="input-group-btn">
										<span class="btn btn-primary btn-file" style="margin-bottom: 24px;">
											<i class="fa fa-upload"></i><input type="file" name="image" id="image">
										</span>
									</span>
									<input type="text" class="form-control image" readonly="" parsley-trigger="change" parsley-required="true" parsley-validation-minlength="1">
								</div>
							</div>

							<div class="form-group">
								<label for="firstname">First Name *</label>
								<input type="text" name="fname" class="form-control" id="firstname" parsley-trigger="change" parsley-required="true" style="text-transform: capitalize;" value="{{ Input::old('fname') }}">
							</div>

							<div class="form-group">
								<label for="middlename">Middle Name</label>
								<input type="text" name="mname" class="form-control" id="middlename" style="text-transform: capitalize;" value="{{ Input::old('mname') }}">
							</div>

							<div class="form-group">
								<label for="lastname">Last Name *</label>
								<input type="text" name="lname" class="form-control" id="lastname" parsley-trigger="change" parsley-required="true" style="text-transform: capitalize;" value="{{ Input::old('lname') }}">
							</div>

							<div class="form-group">
								<label for="usertype">User Type *</label>
								<select name="usertypeid" class="chosen-select chosen-transparent form-control" id="usertype" parsley-trigger="change" parsley-required="true" parsley-error-container="#selectbox">
									<option value="">Please choose</option>
									@foreach($usertypes as $usertype)
										<option value="{{ $usertype->id }}" <?php if(Input::old('usertypeid') == $usertype->id) echo 'selected'; ?>>{{ ucwords($usertype->name) }}</option>
									@endforeach
								</select>
							</div>

							<div class="form-group">
								<label for="username">Username *</label>
								<input type="text" name="username" class="form-control" id="username" parsley-trigger="change" parsley-required="true" parsley-minlength="6" parsley-validation-minlength="1" value="{{ Input::old('username') }}">
							</div>

							<div class="form-group">
								<label for="password">Password *</label>
								<input type="password" name="password" class="form-control" id="password" parsley-trigger="change" parsley-required="true" parsley-minlength="6" parsley-validation-minlength="1" parsley-equalto="#retype-password">
							</div>

							<div class="form-group">
								<label for="retype-password">Re-Type Password *</label>
								<input type="password" name="password_confirmation" class="form-control" id="retype-password" parsley-trigger="change" parsley-required="true" parsley-minlength="6" parsley-validation-minlength="1" parsley-equalto="#password">
							</div>
							
						</div>
						<div class="modal-footer">
							<button type="submit" class="btn btn-primary">Submit</button>
							<button type="reset" class="btn btn-default">Reset</button>
						</div>
						{{ Form::close() }}
					</div>
				</div>
			</div>

			<div class="modal fade" id="editModalDialog" tabindex="-1" role="dialog" aria-labelledby="modalDialogLabel" aria-hidden="true">
				<div class="modal-dialog">
					<div class="modal-content">
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal" aria-hidden="true">Close</button>
							<h3 class="modal-title" id="modalDialogLabel"><strong>Edit</strong> System User</h3>
						</div>

						{{ Form::open(array('url' => '/user', 'method' => 'post', 'class' => 'form-horizontal', 'role' => 'form', 'parsley-validate' => '', 'enctype' => 'multipart/form-data')) }}

						<div class="modal-body">

							<div class="form-group">
								<label for="image">Upload *</label>
								<div class="input-group">
									<span class="input-group-btn">
										<span class="btn btn-primary btn-file" style="margin-bottom: 24px;">
											<i class="fa fa-upload"></i><input type="file" name="image" id="image">
										</span>
									</span>
									<input type="text" class="form-control image" readonly="" parsley-trigger="change" parsley-required="true" parsley-validation-minlength="1">
								</div>
							</div>

							<div class="form-group">
								<label for="firstname">First Name *</label>
								<input type="text" name="fname" class="form-control" id="firstname" parsley-trigger="change" parsley-required="true" style="text-transform: capitalize;" value="{{ Input::old('fname') }}">
							</div>

							<div class="form-group">
								<label for="middlename">Middle Name</label>
								<input type="text" name="mname" class="form-control" id="middlename" style="text-transform: capitalize;" value="{{ Input::old('mname') }}">
							</div>

							<div class="form-group">
								<label for="lastname">Last Name *</label>
								<input type="text" name="lname" class="form-control" id="lastname" parsley-trigger="change" parsley-required="true" style="text-transform: capitalize;" value="{{ Input::old('lname') }}">
							</div>

							<div class="form-group">
								<label for="usertype">User Type *</label>
								<select name="usertypeid" class="chosen-select chosen-transparent form-control" id="usertype" parsley-trigger="change" parsley-required="true" parsley-error-container="#selectbox">
									<option value="">Please choose</option>
									@foreach($usertypes as $usertype)
										<option value="{{ $usertype->id }}" <?php if(Input::old('usertypeid') == $usertype->id) echo 'selected'; ?>>{{ ucwords($usertype->name) }}</option>
									@endforeach
								</select>
							</div>

							<div class="form-group">
								<label for="username">Username *</label>
								<input type="text" name="username" class="form-control" id="username" parsley-trigger="change" parsley-required="true" parsley-minlength="6" parsley-validation-minlength="1" value="{{ Input::old('username') }}">
							</div>

							<div class="form-group">
								<label for="password">Password *</label>
								<input type="password" name="password" class="form-control" id="password" parsley-trigger="change" parsley-required="true" parsley-minlength="6" parsley-validation-minlength="1" parsley-equalto="#retype-password">
							</div>

							<div class="form-group">
								<label for="retype-password">Re-Type Password *</label>
								<input type="password" name="password_confirmation" class="form-control" id="retype-password" parsley-trigger="change" parsley-required="true" parsley-minlength="6" parsley-validation-minlength="1" parsley-equalto="#password">
							</div>
							
						</div>
						<div class="modal-footer">
							<button type="submit" class="btn btn-primary">Submit</button>
							<button type="reset" class="btn btn-default">Reset</button>
						</div>
						{{ Form::close() }}
					</div>
				</div>
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
			// file upload
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

			// Add custom class to pagination div
      		$.fn.dataTableExt.oStdClasses.sPaging = 'dataTables_paginate paging_bootstrap paging_custom';

      		function restoreRow(oTable02, nRow) {
      			var aData = oTable02.fnGetData(nRow);
      			var jqTds = $('>td', nRow);

      			for(var i=0, iLen=jqTds.length ; i<iLen ; i++) {
      				oTable02.fnUpdate(aData[i], nRow, i, false);
      			}

      			oTable02.fnDraw();
      		};

      		function editRow(oTable02, nRow) {
      			var aData = oTable02.fnGetData(nRow);
      			var jqTds = $('>td', nRow);
      			jqTds[0].innerHTML = '<input type="text" value="'+aData[0]+'">';
      			jqTds[1].innerHTML = '<input type="text" value="'+aData[1]+'">';
      			jqTds[2].innerHTML = '<input type="text" value="'+aData[2]+'">';
      			jqTds[3].innerHTML = '<input type="text" value="'+aData[3]+'">';
      			jqTds[4].innerHTML = '<a class="edit save" href="#">Save</a><a class="delete" href="#">Delete</a>';
      		};

      		function saveRow(oTable02, nRow) {
      			var jqInputs = $('input', nRow);
      			oTable02.fnUpdate( jqInputs[0].value, nRow, 0, false );
		        oTable02.fnUpdate( jqInputs[1].value, nRow, 1, false );
		        oTable02.fnUpdate( jqInputs[2].value, nRow, 2, false );
		        oTable02.fnUpdate( jqInputs[3].value, nRow, 3, false );
		        oTable02.fnUpdate( '<a class="edit" href="#">Edit</a><a class="delete" href="#">Delete</a>', nRow, 4, false );
		        oTable02.fnDraw();
      		};

      		var oTable02 = $('#inlineEditDataTable').dataTable({
      			"sDom":
      				"R<'row'<'col-md-6'l><'col-md-6'f>r>"+
      				"t"+
      				"<'row'<'col-md-4 sm-center'i><'col-md-4'><'col-md-4 text-right sm-center'p>>",
      			"oLanguage": {
      				"sSearch": ""
      			},
      			"aoColumnDefs": [
      				{ 'bSortable': false, 'aTargets': [ "no-sort" ] }
      			],
      			"fnInitComplete": function(oSettings, json) {
      				$('.dataTables_filter input').attr("placeholder", "Search");
      			}
      		});

      		// append add row button to table
      		var addRowLink = '<a href="#addModalDialog" id="addRow" class="btn btn-green btn-xs add-row" data-toggle="modal">Add row</a>'
      		$('#inlineEditDataTable_wrapper').append(addRowLink);

      		var nEditing = null;

      		// // add row initialize
      		// $('#addRow').click(function(e) {
      		// 	e.preventDefault();

      		// 	// only allow a new row when not currently editing
      		// 	if(nEditing !== null) {
      		// 		return;
      		// 	}

      		// 	var aiNew = oTable02.fnAddData([ '', '', '', '', '', '<a class="edit" href="#">Edit</a>', '<a class="delete" href="#">Delete</a>' ]);
      		// 	var nRow = oTable02.fnGetNodes(aiNew[0]);
      		// 	editRow(oTable02, nRow);
      		// 	nEditing = nRow;

      		// 	$(nRow).find('td:last-child').addClass('actions text-center');
      		// });

      		// delete row initialize
      		$(document).on("click", "#inlineEditDataTable a.delete", function(e) {
      			e.preventDefault();

      			var nRow = $(this).parents('tr')[0];
      			oTable02.fnDeleteRow(nRow);
      			nEditing = null;
      		});

      		// // edit row initialize
      		// $(document).on("click", "#inlineEditDataTable a.edit", function(e) {
      		// 	e.preventDefault();

      		// 	// get the row as a parent of the link that was clicked on
      		// 	var nRow = $(this).parents('tr')[0];

      		// 	if(nEditing !== null && nEditing != nRow) {
      		// 		// a different row is being edited - the edit should be cancelled and this row edited
      		// 		//restoreRow(oTable02, nEditing);

      		// 		// only allow a new row when not currently editing
	      	// 		if(nEditing !== null) {
	      	// 			return;
	      	// 		}

      		// 		editRow(oTable02, nRow);
      		// 		nEditing = nRow;
      		// 	}
      		// 	else if (nEditing == nRow && this.innerHTML == "Save") {
      		// 		// this row is being edited and should be saved
      		// 		saveRow(oTable02, nEditing);
      		// 		nEditing = null;
      		// 	}
      		// 	else {
      		// 		// no row currently being edited
      		// 		editRow(oTable02, nRow);
      		// 		nEditing = nRow;
      		// 	}
      		// });
      	})
	</script>
@stop