<!DOCTYPE html>

<html class="no-js" lang="en">
	<head>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<title>Voting System</title>
		<!-- Bootstrap -->
		{{ HTML::style('/assets/css/vendor/bootstrap/bootstrap.min.css') }}
		{{ HTML::style('/assets/css/font-awesome.css') }}

		@yield('css')

		{{ HTML::style('/assets/css/custom.css') }}
	</head>
	<body class="bg-6">
	
		<div class="row">
			<div class="container">

				@yield('content')

			</div>
		</div>
		
	<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="/assets/js/jquery.js"></script>

     @yield('script')

    <script src="/assets/js/custom.js"></script>
	</body>
</html>