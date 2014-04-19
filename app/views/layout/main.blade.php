<!DOCTYPE html>

<html class="no-js" lang="en">
	<head>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<title>Voting System</title>
		<!-- Bootstrap -->
		{{ HTML::style('assets/css/vendor/bootstrap/bootstrap.min.css') }}
		{{ HTML::style('assets/css/font-awesome.css') }}
		{{ HTML::style('assets/css/vendor/animate/animate.min.css') }}
		{{ HTML::style('assets/js/vendor/mmenu/css/jquery.mmenu.all.css') }}
		{{ HTML::style('assets/js/vendor/videobackground/css/jquery.videobackground.css') }}
		{{ HTML::style('assets/css/vendor/bootstrap-checkbox.css') }}

		{{ HTML::style('assets/js/vendor/rickshaw/css/rickshaw.min.css') }}
		{{ HTML::style('assets/js/vendor/morris/css/morris.css') }}
		{{ HTML::style('assets/js/vendor/tabdrop/css/tabdrop.css') }}
		{{ HTML::style('assets/js/vendor/summernote/css/summernote.css') }}
		{{ HTML::style('assets/js/vendor/summernote/css/summernote-bs3.css') }}
		{{ HTML::style('assets/js/vendor/chosen/css/chosen.min.css') }}
		{{ HTML::style('assets/js/vendor/chosen/css/chosen-bootstrap.css') }}
		{{ HTML::style('assets/js/vendor/datatables/css/dataTables.bootstrap.css') }}
		{{ HTML::style('assets/js/vendor/datatables/css/ColVis.css') }}
		{{ HTML::style('assets/js/vendor/datatables/css/TableTools.css') }}

		@yield('css')

		{{ HTML::style('assets/css/minimal.css') }}

		{{ HTML::style('assets/css/custom.css') }}
	</head>
	<body class="bg-1">

		<div class="mask"><div id="loader"></div></div>

		<div id="wrap">
			<div class="row">

				@yield('content')
				
			</div>
		</div>

	<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="assets/js/jquery.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="assets/js/vendor/bootstrap/bootstrap.min.js"></script>
    <script type="text/javascript" src="assets/js/vendor/mmenu/js/jquery.mmenu.min.js"></script>
    <script type="text/javascript" src="assets/js/vendor/sparkline/jquery.sparkline.min.js"></script>
    <script type="text/javascript" src="assets/js/vendor/nicescroll/jquery.nicescroll.min.js"></script>
    <script type="text/javascript" src="assets/js/vendor/animate-numbers/jquery.animateNumbers.js"></script>
    <script type="text/javascript" src="assets/js/vendor/videobackground/jquery.videobackground.js"></script>
    <script type="text/javascript" src="assets/js/vendor/blockui/jquery.blockUI.js"></script>

    <script src="assets/js/vendor/datatables/jquery.dataTables.min.js"></script>
    <script src="assets/js/vendor/datatables/ColReorderWithResize.js"></script>
    <script src="assets/js/vendor/datatables/colvis/dataTables.colVis.min.js"></script>
    <script src="assets/js/vendor/datatables/tabletools/ZeroClipboard.js"></script>
    <script src="assets/js/vendor/datatables/tabletools/dataTables.tableTools.min.js"></script>
    <script src="assets/js/vendor/datatables/dataTables.bootstrap.js"></script>

    <script type="text/javascript" src="assets/js/vendor/chosen/chosen.jquery.min.js"></script>
    <script type="text/javascript" src="assets/js/vendor/parsley/parsley.min.js"></script>
    
    @yield('script')

    <script src="assets/js/minimal.min.js"></script>
    <script src="assets/js/custom.js"></script>
	</body>
</html>