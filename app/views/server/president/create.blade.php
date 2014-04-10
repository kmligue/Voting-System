@extends('layout.menu')

@section('body')

	<div class="row field-wrapper">

		<div class="large-12 medium-12 columns">
			<h1>Add President</h1>
		</div>

		<div class="larg-12 medium-12 columns field-error">
			<span>
				<h5></h5>
			</span>
		</div>

		<div class="large-12 medium-12 columns">
			{{ Form::label('name', 'President Name') }}
			{{ Form::text('name', '', array('autofocus' => '')) }}
			{{ HTML::link('dashboard', 'Cancel', array('class' => 'right button alert')) }}
			{{ Form::button('Submit', array('class' => 'right button success')) }}
		</div>
	</div>

@stop