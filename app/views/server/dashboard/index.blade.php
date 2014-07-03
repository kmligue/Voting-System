@extends('layout.menu')

@section('body')

<?php

	$flag = 0;

?>

<div class="pageheader">
	<h2>
		<i class="fa fa-tachometer"></i> Dashboard
	</h2>
	<section class="tile transparent">
		<h1><span class="voted">0</span> out of <span class="population">0</span> voters</h1>
		@foreach($positions as $position)
			<div class="tile-body color transparent-white rounded-bottom-corners col-lg-11" style="margin: 30px;">
				<div class="row">
					<ul class="inline">
						<li class="col-md-12 col-sm-12 col-xs-12">
							<h3 class="underline">
								<strong>{{ $position->name }}</strong>
							</h3>
			@foreach($candidates as $candidate)
				@if($candidate->position_id == $position->id)
					<ul class="progress-list">
						<li>
							<div class="details">
								<div class="title">{{ $candidate->fname . ' ' . $candidate->mname . ' ' . $candidate->lname }}</div>
							</div>
							<div class="status pull-right">
								
								<span id="{{ $candidate->id }}" class="animate-number" data-value="0.00" data-animation-duration="1500">0.00</span>
							</div>
							<div class="clearfix"></div>
							<div class="progress progress-little">
								
								<div id="{{ $candidate->id . 'a' }}" class="progress-bar progress-bar-green animate-progress-bar" data-percentage="" style="width:"></div>
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

@section('script')
	<script>
		$(document).ready(function() {
			var i = setInterval(function() {
				$.ajax({
					url: '/dashboard',
					success: function(data) {

						$.each(data, function() {
							var id = '';
						    $.each(this, function(k, v) {

						        if(k == 'candidate_id') {
						        	id = v;
						        } 

						        if(k == 'percentage') {
						        	$('span#' + id).html(v + '%');
						        	$('span#' + id).attr('data-value', v);
						        	$('div#' + id + 'a').css('width', v + '%');
						        	$('div#' + id + 'a').attr('data-percentage', v + '%');
						        }

						        if(k == 'cnt') {
						        	$('span#' + id).append(' - ' + v + ' vote/s');
						        }

						    });
						});
					}
				});
			}, 2000);

			var j = setInterval(function() {
				$.ajax({
					url: '/dashboard/create',
					success: function(data) {

						$.each(data, function(k, v) {
							if(k == 'voted') $('span.voted').html(v);
							if(k == 'population') $('span.population').html(v);
						});
					}
				});
			}, 2000);



			var scrollingUp = 0;

			window.setInterval(scrollit, 3000);

			function scrollit() {
			    if(scrollingUp == 0) {
			        $('#content').delay(2000).animate({ scrollTop: $("#content").scrollTop() + 100 }, 'slow');
			    }
			}

			$('#content').bind('scroll', function () {
			    
			    if ($(this).scrollTop() + $(this).innerHeight() >= $(this)[0].scrollHeight) {
			        scrollingUp = 1;      
			        $('#content').delay(2000).animate({ scrollTop: 0 }, 1000, function() {
			            scrollingUp = 0;    
			        });
			    }
			});

			
		})
	</script>
@stop