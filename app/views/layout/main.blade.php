<!DOCTYPE html>

<html class="no-js" lang="en">
	<head>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<title>Voting System</title>
		<!-- Bootstrap -->
		{{ HTML::style('assets/css/vendor/bootstrap/bootstrap.min.css') }}
		{{ HTML::style('assets/css/font-awesome.css') }}

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

    <script type="text/javascript" src="assets/js/vendor/chosen/chosen.jquery.min.js"></script>
    <script type="text/javascript" src="assets/js/vendor/parsley/parsley.min.js"></script>

    <script type="text/javascript">
    	$(document) 
    		.on('change', '.btn-file :file', function() {
    			var input = $(this),
    			numFiles = input.get(0).files ? input.get(0).files.length : 1,
    			label = input.val().replace(/\\/g, 'http://tattek.com/').replace(/.*\//, '');
    			input.trigger('fileselect', [numFiles, label]);
    	 });

    	$(function() {
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
    	})
    </script>
    
    @yield('script')

    <script src="assets/js/minimal.min.js"></script>
    <script src="assets/js/custom.js"></script>
	</body>
</html>