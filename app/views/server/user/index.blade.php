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
					</div>
			
					<div class="tile-body color transparent-black rounded-corners">
						
						<?php

							if(Session::has('msg-success')) {
								echo '<div class="notification notification-success">' .
								'<h4>' . Session::get('msg-success') . '</h4>' .
								'</div>';
							}

              if(Session::has('msg-error')) {
                echo '<div class="alert alert-red">' .
                      Session::get('msg-error') .
                      '</div>';
              }

						?>
						{{ Input::get('fname') }}
						<div class="table-responsive">
							<table class="table table-datatable table-custom" id="inlineEditDataTable">
								<thead>
									<tr>
										<th class="sort-numeric">Id</th>
										<th class="sort-alpha">First Name</th>
										<th class="sort-alpha">Middle Name</th>
										<th class="sort-alpha">Last Name</th>
										<th class="sort-alpha">User Type</th>
										<th class="sort-alpha">Username</th>
										<th class="no-sort">Profile Image</th>
										@if(Auth::user()->usertype_id == 1)
											<th class="no-sort">Actions</th>
										@endif
									</tr>
								</thead>
								<tbody>

									@foreach($users as $user)
										<tr>
											<td class="text-center">{{ $user->id }}</td>
											<td class="text-center">{{ ucwords($user->fname) }}</td>
											<td class="text-center">{{ ucwords($user->mname) }}</td>
											<td class="text-center">{{ ucwords($user->lname) }}</td>
											<td class="text-center">{{ ucwords($user->usertype->name) }}</td>
											<td class="text-center">{{ $user->username }}</td>
											<td class="text-center"><img src="{{ $user->image }}" style="width: 30px; height: 30px;"></td>
											@if(Auth::user()->usertype_id == 1)
												<td class="actions text-center"><a class="edit" href="/user/{{ $user->id }}/edit">Edit</a><a class="delete" href="#delete" id="{{ $user->id }}" data-toggle="modal">Delete</a></td>
											@endif
										</tr>
									@endforeach
								</tbody>
							</table>
						</div>

					</div>

				</section>

			</div>

		</div>
	</div>

  <div class="modal fade" id="delete" tabindex="-1" role="dialog" aria-labelledby="modalConfirmLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">Close</button>
          <h3 class="modal-title" id="modalConfirmLabel"><strong>Delete</strong> user</h3>
        </div>
        {{ Form::open(array('url' => '', 'method' => 'delete', 'id' => 'delete')) }}
        <div class="modal-body">
              
            {{ Form::hidden('delete-id') }}
            <p>Are you sure you want to delete user?</p>

        </div>
        <div class="modal-footer">
          <button class="btn btn-slategray" data-dismiss="modal" aria-hidden="true">Close</button>
          <input type="submit" class="btn btn-redbrown" value="Delete">
        </div>
        {{ Form::close() }}
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

      		var oTable02 = $('#inlineEditDataTable').dataTable({
      			"sDom":
      				"R<'row'<'col-md-6'l><'col-md-6'f>r>"+
      				"t"+
      				"<'row'<'col-md-4 sm-center'i><'col-md-4'><'col-md-4 text-right sm-center'p>>",
      			"oLanguage": {
      				"sSearch": ""
      			},
      			"aaSorting": [[ 0, "desc" ]],
      			"aoColumnDefs": [
      				{ 	'bSortable': false, 
      					'aTargets': [ "no-sort" ] ,
      				}
      			],
      			"fnInitComplete": function(oSettings, json) {
      				$('.dataTables_filter input').attr("placeholder", "Search");
      			}
      		});

      		// hide first column
      		oTable02.fnSetColumnVis(0, false);

      		// append add row button to table
      		var addRowLink = '<a href="user/create" id="addRow" class="btn btn-green btn-xs add-row">Add User</a>'
      		$('#inlineEditDataTable_wrapper').append(addRowLink);

      		var nEditing = null;
          
          // delete function
          $(document).on("click", "#inlineEditDataTable a.delete", function(e) {
            var id = $(this).attr('id');
            
            $('input[name="delete-id"]').val(id);
            $('form#delete').attr('action', 'user/' + id);
          });

          //initialize chosen
          $('.dataTables_length select').chosen({disable_search_threshold: 10});
      	})
	</script>
@stop