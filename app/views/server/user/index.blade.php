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
						<h1><strong>Basic</strong> Datatable</h1>
						<span class="note">including: <span class="italic">multi-column sorting and row select</span></span>
						<div class="controls">
							<a href="#" class="refresh"><i class="fa fa-refresh"></i></a>
						</div>
					</div>
			
					<div class="tile-body color transparent-black rounded-corners">
						
						<div class="table-responsive">
							<table class="table table-datatable table-custom" id="inlineEditDataTable">
								<thead>
									<tr>
										<th class="sort-alpha">Rendering engine</th>
										<th class="sort-alpha">Browser</th>
										<th class="sort-amount">Platform(s)</th>
										<th class="sort-numeric">Engine version</th>
										<th>CSS grade</th>
										<th class="no-sort">Actions</th>
									</tr>
								</thead>
								<tbody>
									<tr class="odd gradeX">
										<td>Trident</td>
										<td>Internet Explorer 4.0</td>
										<td>Win 95+</td>
										<td class="text-center"> 4</td>
                                  		<td class="text-center">X</td>
                                  		<td class="actions text-center"><a class="edit" href="#">Edit</a><a class="delete" href="#">Delete</a></td>
									</tr>
									<tr class="even gradeC">
										<td>Trident</td>
										<td>Internet Explorer 5.0</td>
										<td>Win 95+</td>
										<td class="text-center">5</td>
                                  		<td class="text-center">C</td>
                                  		<td class="actions text-center"><a class="edit" href="#">Edit</a><a class="delete" href="#">Delete</a></td>
									</tr>
									<tr class="odd gradeA">
										<td>Trident</td>
										<td>Internet Explorer 5.5</td>
										<td>Win 95+</td>
										<td class="text-center">5.5</td>
                                  		<td class="text-center">A</td>
                                  		<td class="actions text-center"><a class="edit" href="#">Edit</a><a class="delete" href="#">Delete</a></td>
									</tr>
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
      			jqTds[4].innerHTML = '<input type="text" value="'+aData[4]+'">';
      			jqTds[5].innerHTML = '<a class="edit save" href="#">Save</a><a class="delete" href="#">Delete</a>';
      		};

      		function saveRow(oTable02, nRow) {
      			var jqInputs = $('input', nRow);
      			oTable02.fnUpdate( jqInputs[0].value, nRow, 0, false );
		        oTable02.fnUpdate( jqInputs[1].value, nRow, 1, false );
		        oTable02.fnUpdate( jqInputs[2].value, nRow, 2, false );
		        oTable02.fnUpdate( jqInputs[3].value, nRow, 3, false );
		        oTable02.fnUpdate( jqInputs[4].value, nRow, 4, false );
		        oTable02.fnUpdate( '<a class="edit" href="#">Edit</a><a class="delete" href="#">Delete</a>', nRow, 5, false );
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
      		var addRowLink = '<a href="#" id="addRow" class="btn btn-green btn-xs add-row">Add row</a>'
      		$('#inlineEditDataTable_wrapper').append(addRowLink);

      		var nEditing = null;

      		// add row initialize
      		$('#addRow').click(function(e) {
      			e.preventDefault();

      			// only allow a new row when not currently editing
      			if(nEditing !== null) {
      				return;
      			}

      			var aiNew = oTable02.fnAddData([ '', '', '', '', '', '<a class="edit" href="">Edit</a>', '<a class="delete" href="">Delete</a>' ]);
      			var nRow = oTable02.fnGetNodes(aiNew[0]);
      			editRow(oTable02, nRow);
      			nEditing = nRow;

      			$(nRow).find('td:last-child').addClass('actions text-center');
      		});

      		// delete row initialize
      		$(document).on("click", "#inilineEditDataTable a.delete", function(e) {
      			e.preventDefault();

      			var nRow = $(this).parents('tr')[0];
      			oTable02.fnDeleteRow(nRow);
      		});

      		// edit row initialize
      		$(document).on("click", "#inlineEditDataTable a.edit", function(e) {
      			e.preventDefault();

      			// get the row as a parent of the link that was clicked on
      			var nRow = $(this).parents('tr')[0];

      			if(nEditing !== null && nEditing != nRow) {
      				// a different row is being edited - the edit should be cancelled and this row edited
      				restoreRow(oTable02, nEditing);
      				editRow(oTable02, nRow);
      				nEditing = nRow;
      			}
      			else if (nEditing == nRow && this.innerHTML == "Save") {
      				// this row is being edited and should be saved
      				saveRow(oTable02, nEditing);
      				nEditing = null;
      			}
      			else {
      				// no row currently being edited
      				editRow(oTable02, nRow);
      				nEditing = nRow;
      			}
      		});
      	})
	</script>
@stop