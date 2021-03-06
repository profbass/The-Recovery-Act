@extends('site.layouts.default')
{{-- Web site Title --}}

@section('title')
	{{{ Lang::get('Home Page') }}}
	@parent
@stop

{{-- Content --}}
@section('content')

{{-- Home Image --}}
<section id="home" class="parallax">
	<div>
	 	<div class="parallax welcome-text" data-speed="0.1"></div>
	 </div>
</section>


{{-- Shows --}}
<section id="shows" class="section-padding">
	<article>
		<div class="container">
	   		<div class="row">
	   			<div class="col-md-12">
	   				<h1>{ Upcoming Shows }</h1>
	   				<div class="dec-border large-top"></div>
	   				<p>&nbsp;</p>
	   			</div>
	   		</div>
	   		<div class="row">

				@foreach($shows as $show)

			  		<div class="col-xs-12 col-sm-4 col-md-4 show-cell animatedElement" data-animation="fadeIn">
			  			<div class="date-wrapper">
				  			<div>
					  			<h4>
					  				<span class="hour">{{ date("d",strtotime($show->date)) }}</span>
					  				<span class="month font-serif">{{ date("M",strtotime($show->date)) }}</span>
					  			</h4>
				  			</div>
			  			</div>
			  			@if ($show->venue)
			  				<h2>{{ $show->venue }}</h2>
			  			@endif
			  			<p>
			  				@if ($show->address)
				  				{{ $show->address }}
				  				<br>
				  			@endif
			  				<span class="time hidden-xs">show starts at {{ date("g:ha",strtotime($show->date)) }}</span>
			  			</p>
			  			<ul class="sn-list">
							@if ($show->web_link)
					  			<li class="pull-left">
					  				<a class="btn btn-default btn-sm" href="{{ $show->web_link }}" target="_blank">FIND OUT MORE <i class="fa fa-chevron-right fa-1x"></i></a>
					  			</li>
					  		@endif
			  				@if ($show->facebook_link)
					  			<!-- <li class="pull-left">
					  				<a href="{{ $show->facebook_link }}" target="_blank" title="" class="sn-links facebook">
										<span class="fa-stack fa-lg fa-1x">
										  <i class="fa fa-circle fa-stack-2x fa-inverse"></i>
										  <i class="fa fa-facebook fa-stack-1x"></i>
										</span>
									</a>
								</li> -->
							@endif
			  			</ul>
			  		</div>

			  	@endforeach

			</div>
			<div class="row">
				<div class="col-md-12">
					<p>&nbsp;</p>
	   				<div class="dec-border large-bottom"></div>
					<p>&nbsp;</p>
					<p class="link-arrow-right" style="text-align:center;"> <a href="">CHECK OUT ALL OF OUR UPCOMING SHOWS <i class="fa fa-chevron-circle-right"></i></a>
					</p>
				</div>
			</div>
		</div>
	</article>
 </section>

{{-- Band Image --}}
<section id="band" class="parallax"></section>

{{-- Blog Feed/News --}}
<section id="news" class="section-padding">
	<!-- <div id="guitar" class="parallax" data-pos="-55%" data-speed="0.8"> -->
	   	<div class="container">
	   		<div class="row">
	   			<div class="col-md-12">
	   				<h1>{ News Reel } </h1>
	   				<div class="dec-border large-top"></div>
	   				<p>&nbsp;</p>
	   			</div>
	   		</div>
	   		<div class="row">

				@foreach($blog as $key => $posts)
				
			  		<div @if ($key === 2) 
			  				class="hidden-xs hidden-sm col-sm-4"
			  			@else 
			  				class="col-xs-12 col-sm-6 col-md-4"
			  			@endif
			  		>
			  			<div class="box news-container news-{{ $key }}" >
			  				<span style="background-image: url(assets/img/bg-{{ $key }}.jpg);"></span>
				  			<div class="news-content">
					  			<h2>{{ $posts->title }}</h2>
					  			<p>{{ String::tidy(Str::limit(strip_tags($posts->content, 200))) }}</p>
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
					<p style="text-align:center;"> <a href="">SEE EVERYTHING WE HAVE GOING ON <i class="fa fa-chevron-circle-right"></i></a>
					</p>
				</div>
			</div>
		</div>
  	</div>
</section>

{{-- Signup Section --}}
<section id="signup" class="parallax">
	<div id="mic" class="parallax hide-xs" data-pos="114%" data-speed="0.9">
		<div class="bg">
		   	<div class="container">

		   	<div class="row">
	   			<div class="col-md-12">
	   				<h2>Do You Want To Hear More?!</h2>
	   				
	   			</div>
			</div>
	   		<div class="row">
	   			<div class="col-xs-1 col-md-3"></div>
	   			<div class="col-xs-10 col-md-6">
	   				<form class="form-horizontal" role="form">
					  <div class="form-group">
					    <div class="input-group margin-bottom-sm">
							<span class="input-group-addon"><i class="fa fa-envelope-o fa-fw"></i></span>
							<input class="form-control" type="text" placeholder="Your Email address">
						</div>
					  </div>
					  <div class="form-group">
					      <button type="submit" class="btn btn-primary btn-md btn-block">SIGN UP, AND KEEP IN TOUCH! <i class="fa fa-chevron-right fa-1x"></i></button>
					  </div>
					</form>
	   			</div>
	   			<div class="col-xs-1 col-md-3"></div>
			</div>
		</div>
	</div>
</section>


@stop
