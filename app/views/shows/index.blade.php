@extends('site.layouts.default')
{{-- Web site Title --}}

@section('title')
	{{{ Lang::get('Shows') }}}
	@parent
@stop

{{-- Content --}}
@section('content')

	<section id="shows"> 
		<div class="container">
	   		<div class="row">

				@foreach($shows as $event)

					<div class="col-xs-12 col-sm-6 col-md-6">
					  	@if ($event->heading)
					  		<h2>{{ $event->heading }}</h2>
					  	@endif
					  	@if ($event->web_link)
					  		<h4>{{ $event->web_link }}</h4>
					  	@endif
					  	@if ($event->content)
						  	<p>{{ $event->content }}</p>
						@endif
					</div>
				
				@endforeach

		 	</div>
		</div>	
	</section>

@stop