<!DOCTYPE html>

<html class="no-js" lang="en">
	<head>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<title>Voting System</title>
		{{ HTML::style('assets/css/normalize.css') }}
		{{ HTML::style('assets/css/foundation.min.css') }}
		{{ HTML::style('assets/css/font-awesome.css') }}
		{{ HTML::style('assets/css/icons.css') }}
		{{ HTML::style('assets/css/component.css') }}

		@yield('css')
		
		{{ HTML::style('assets/css/custom.css') }}
		{{ HTML::script('assets/js/modernizr.js') }}
	</head>
	<body>

		@yield('content')

		{{ HTML::script('assets/js/jquery.js') }}
		{{ HTML::script('assets/js/foundation.min.js') }}
		{{ HTML::script('assets/js/classie.js') }}
		{{ HTML::script('assets/js/sidebarEffects.js') }}

		<script type="text/javascript">
			$(document).foundation();
		</script>

		@yield('script')
	</body>
</html>