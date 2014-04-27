@extends('site.layouts.default')
{{-- Web site Title --}}

@section('title')
	{{{ Lang::get('Shows') }}}
	@parent
@stop

{{-- Content --}}
@section('content')

<section id="shows">
	<div class="content-banner parallax" data-speed="0.2" data-pos="-55%" >
		<div class="container parallax" data-speed="0.5">
	   		<div class="row">
	   			<div class="col-md-11 col-md-offset-1">
	   				<h1>{ Shows }<br/> <span class="font-sans-serif">Come see The Recovery Act play Live! Check out our next show.</span></h1>
	   			</div>
	   		</div>
	   	</div>
	</div>
	<div class="container">
   		<div class="row">
   			<div class="row">
				<div class="col-md-12">
					<p>&nbsp;</p>
					<p>&nbsp;</p>
	   				<div class="dec-border large-top"></div>
					<p>&nbsp;</p>
				</div>
			</div>

			@foreach($shows as $show)

		  		<div class="show-wrapper col-md-4">
		  			<div class="row">
		  				<div class="col-md-3 col-sm-12 col-xm-12">
				  			<div class="date-wrapper">
					  			<div>
						  			<h4>
						  				<span class="hour">{{ date("d",strtotime($show->date)) }}</span>
						  				<span class="month font-serif">{{ date("M",strtotime($show->date)) }}</span>
						  			</h4>
					  			</div>
				  			</div>
				  		</div>
				  		<div class="col-md-9 col-sm-12 col-xm-12">
				  			@if ($show->venue)
				  				<h2>{{ $show->venue }}</h2>
				  			@endif
				  			<p class="address">
				  				@if ($show->address)
					  				{{ $show->address }}
					  				<br>
					  			@endif
				  				<span class="time">show starts at {{ date("g:ha",strtotime($show->date)) }}</span>
				  			</p>
				  		</div>
		  			</div>
		  			<div class="row">
		  				<div class="col-sm-12 col-md-12 col-xm-12 content">
			  				@if ($show->content)
				  				<div>{{ $show->content }}</div>
				  			@endif
				  			<hr>
				  			<ul class="sn-list">
								@if ($show->web_link)
						  			<li class="pull-left">
						  				<a class="btn btn-default btn-sm" href="{{ $show->web_link }}" target="_blank">FIND OUT MORE <i class="fa fa-chevron-right fa-1x"></i></a>
						  			</li>
						  			<li class="pull-left">|</li>
						  		@endif
				  				@if ($show->facebook_link)
						  			<li class="pull-left">
						  				<a href="{{ $show->facebook_link }}" target="_blank" title="" class="sn-links facebook">
											<span class="fa-stack fa-lg fa-1x">
											  <i class="fa fa-circle fa-stack-2x fa-inverse"></i>
											  <i class="fa fa-facebook fa-stack-1x"></i>
											</span>
										</a>
									</li>
								@endif
				  			</ul>
			  			</div>
		  			</div>
		  		</div>

		  	@endforeach

		</div>
		<div class="row">
			<div class="col-md-12">
				<p>&nbsp;</p>
				<p>&nbsp;</p>
   				<div class="dec-border large-bottom"></div>
				<p>&nbsp;</p>
			</div>
		</div>
	</div>
 </section>

@stop