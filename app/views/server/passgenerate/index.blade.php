@extends('layout.menu')

@section('body')
	<div class="pageheader">
		<h2>
			<i class="fa fa-user"></i> Generate Password
		</h2>
	</div>

	<div class="main">
		<div class="row">
			
			<div class="col-md-12">
				<div class="notification notification-success">
					<h4>Successfully added password!</h4>
				</div>

				<section class="tile transparent">

					<div class="tile-header transparent">
						<h1><strong>Password</strong> Table</h1>
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
										<th class="sort-alpha">Student</th>
										<th class="sort-alpha">Password</th>
									</tr>
								</thead>
								<tbody>
									
									@foreach($students as $student)
										<tr>
											<td class="text-center">{{ $student->id }}</td>
											<td class="text-center">{{ ucwords($student->fname) . ' ' . ucwords($student->mname) . ' ' . ucwords($student->lname) }}</td>
											<td class="text-center">{{ ucwords($student->password) }}</td>
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
      		var addRowLink = '<a href="#" id="addRow" class="btn btn-green btn-xs add-row">Print</a>'
      		$('#inlineEditDataTable_wrapper').append(addRowLink);

      		var nEditing = null;
          
	        // delete function
	        $(document).on("click", "#inlineEditDataTable a.delete", function(e) {
	            var id = $(this).attr('id');
	            
	            $('input[name="delete-id"]').val(id);
	            $('form#delete').attr('action', 'candidate/' + id);
	        });

	        //initialize chosen
      		$('.dataTables_length select').chosen({disable_search_threshold: 10});
		})
	</script>
@stop