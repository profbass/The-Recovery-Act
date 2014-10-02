@extends('site.layouts.default')
{{-- Web site Title --}}

@section('title')
	{{{ Lang::get('Band') }}}
	@parent
@stop

{{-- Content --}}
@section('content')

	<section id="band-wrapper">
		
		@foreach($band as $member)

			<article id="{{ $member->last_name }}" class="band-list parallax" data-speed="0.1">
				<div class="top-parallax parallax" data-speed="0.5">
					<div class="container">
				   		<div class="row">

				   			@if ($member->last_name == "Williamson" || $member->last_name == "Olmsted")
							  	<div class="col-xs-12 col-sm-6 col-md-6"></div>
							  	<div class="col-xs-12 col-sm-6 col-md-6">
				   			@else 
				   				<div class="col-xs-12 col-sm-6 col-md-6">
				   			@endif
				   				<div class="dec-border top"></div>
				   				<div class="bio-content">
								  	@if ($member->first_name || $member->last_name)
								  		<h2>{{ $member->first_name }} {{ $member->last_name }}</h2>
								  	@endif
								  	
									@if ($member->email || $member->facebook_url || $member->twitter_handel)
										<ul class="sn-list clearfix">
											<li>
												@if ($member->instrument)
											  		<h3>{{ $member->instrument }}</h3>
											  	@endif
								  			</li>
											@if ($member->email)
							                	
							                	<li>
							                    	<a href="mailto:{{ $member->email }}" target="_blank" title="" class="sn-links email">
							                        	<span class="fa-stack fa-lg fa-1x">
														  <i class="fa fa-circle fa-stack-2x fa-inverse"></i>
														  <i class="fa fa-envelope-o fa-stack-1x"></i>
														</span>
													</a>
							                    </li>

						                    @endif
									  		@if ($member->facebook_url)
							                    
							                    <li>
							                    	<a href="{{ $member->facebook_url }}" target="_blank" title="" class="sn-links facebook">
							                        	<span class="fa-stack fa-lg fa-1x">
														  <i class="fa fa-circle fa-stack-2x fa-inverse"></i>
														  <i class="fa fa-facebook fa-stack-1x"></i>
														</span>
													</a>
							                    </li>

						                    @endif
									  		@if ($member->twitter_handel)
							                    
							                    <li>
							                        <a href="{{ $member->twitter_handel }}" target="_blank" title="" class="sn-links twitter">
							                        	<span class="fa-stack fa-lg fa-1x">
														  <i class="fa fa-circle fa-stack-2x fa-inverse"></i>
														  <i class="fa fa-twitter fa-stack-1x"></i>
														</span>
													</a>
							                    </li>
							                    
						                    @endif
						                </ul>
					                @endif
								  	@if ($member->bio)
									  	<p class="hidden-xs hidden-sm">{{ $member->bio }}</p>
									@endif
				            	</div>
				            	<div class="dec-border bottom"></div>
							@if ($member->first_name == "Willy" || $member->first_name == "Tyler")
							  	<div class="col-xs-12 col-sm-6 col-md-6">
				   			@else 
				   				</div>
							  	<div class="col-xs-12 col-sm-6 col-md-6"></div>
				   			@endif

					 	</div>
					</div>
				</div>   	
			</article>

		@endforeach

	</section>

@stop