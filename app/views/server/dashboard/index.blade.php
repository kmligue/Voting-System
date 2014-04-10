@extends('layout.main')

@section('css')
	{{ HTML::style('assets/css/menu.css') }}
@stop

@section('content')
	@include('layout.menu')
@stop

@section('script')
	{{ HTML::script('assets/js/menu.js') }}

	<script type="text/javascript">
		var menu = new cbpHorizontalSlideOutMenu( document.getElementById( 'cbp-hsmenu-wrapper' ) );
	</script>
@stop