@extends('layout.menu')

@section('body')
	<div class="pageheader">
		<h2>
			<i class="fa fa-user"></i> Position
		</h2>
	</div>

	<div class="main">
		<div class="row">
			
			<div class="col-md-12">

				<section class="tile transparent">

					<div class="tile-header transparent">
						<h1><strong>Position</strong> Table</h1>
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
						
						<div class="table-responsive">
							<table class="table table-datatable table-custom" id="inlineEditDataTable">
								<thead>
									<tr>
										<th class="sort-numeric">Id</th>
										<th class="sort-alpha">Name</th>
										<th class="sort-numeric">Ordinality</th>
										@if(Auth::user()->usertype_id == 1)
											<th class="no-sort">Actions</th>
										@endif
									</tr>
								</thead>
								<tbody>

									@foreach($positions as $position)
										<tr>
											<td class="text-center">{{ $position->id }}</td>
											<td class="text-center">{{ ucwords($position->name) }}</td>
											<td class="text-center">{{ $position->ordinality }}</td>
											@if(Auth::user()->usertype_id == 1)
												<td class="actions text-right"><?php if($position->ordinality != null) { ?><a class="edit" href="/position/{{ $position->id }}/edit">Edit</a> <?php } ?> <a class="delete" href="#delete" id="{{ $position->id }}" data-toggle="modal">Delete</a></td>
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
@stop

@section('script')
	<script>
		$(function() {
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
      		var addRowLink = '<a href="position/create" id="addRow" class="btn btn-green btn-xs add-row">Add Position</a>'
      		$('#inlineEditDataTable_wrapper').append(addRowLink);

      		var nEditing = null;
          
	        // delete function
	        $(document).on("click", "#inlineEditDataTable a.delete", function(e) {
	            var id = $(this).attr('id');
	            
	            $('input[name="delete-id"]').val(id);
	            $('form#delete').attr('action', 'position/' + id);
	        });
		})
	</script>
@stop