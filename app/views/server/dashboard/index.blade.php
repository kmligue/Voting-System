@extends('layout.menu')

@section('body')

<div class="pageheader">
	<h2>
		<i class="fa fa-tachometer"></i> Dashboard
	</h2>
	<section class="tile transparent">
		@foreach($positions as $position)
			<div class="tile-body color transparent-white rounded-bottom-corners col-lg-5" style="margin: 50px;">
				<div class="row">
					<ul class="inline">
						<li class="col-md-12 col-sm-12 col-xs-12">
							<h3 class="underline">
								<strong>{{ $position->name }}</strong>
							</h3>
			@foreach($tallies as $tally)
				@if($tally->position_id == $position->id)
					<ul class="progress-list">
						<li>
							<div class="details">
								<div class="title">{{ $tally->candidate_name }}</div>
							</div>
							<div class="status pull-right">
								<span class="animate-number" data-value="{{ number_format($tally->percentage, 2) }}" data-animation-duration="1500">{{ number_format($tally->percentage, 2) }}</span>%
							</div>
							<div class="clearfix"></div>
							<div class="progress progress-little">
								<div class="progress-bar progress-bar-green animate-progress-bar" data-percentage="{{ $tally->percentage }}%" style="width: {{ $tally->percentage }}%"></div>
							</div>
						</li>
					</ul>
				@endif
			@endforeach
						</li>
					</ul>
				</div>
			</div>
		@endforeach
	</section>
</div>
@stop