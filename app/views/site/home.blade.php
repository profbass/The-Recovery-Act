@extends('site.layouts.default')
{{-- Web site Title --}}

@section('title')
	{{{ Lang::get('Home Page') }}}
	@parent
@stop

{{-- Content --}}
@section('content')

{{-- Home Band Image --}}
<section id="home" class="parallax" data-speed="0.1">
   <article></article>
</section>

{{-- Blog Feed/News --}}
<section id="news" class="parallax" data-speed="0.1">
	<div id="guitar" class="parallax" data-pos="-55%" data-speed="0.8">
	   	<div class="container">
	   		<div class="row">
	   			<div class="col-md-12">
	   				<h1>News</h1>
	   				<p>&nbsp;</p>
	   			</div>
	   		</div>
	   		<div class="row">

				@foreach($blog as $posts)

			  		<div class="col-md-5">
			  			<h2>{{ $posts->title }}</h2>
			  			<p>{{ String::tidy(Str::limit($posts->content, 200)) }}</p>
			  		</div>

			  	@endforeach
			  	<div class="col-md-2"></div>

		 	</div>
		</div>
  	</div>
</section>

{{-- Shows --}}
<section id="shows" class="parallax" data-speed="0.5">
	<article class="animatedElement" data-animation="slideUp">
		<div class="container">
	   		<div class="row">
	   			<div class="col-md-12">
	   				<h1>Upcoming Shows</h1>
	   				<p>&nbsp;</p>
	   			</div>
	   		</div>
	   		<div class="row">

				@foreach($shows as $show)

			  		<div class="col-md-6">
			  			<h4>
			  				<span class="hour">{{ date("d",strtotime($show->date)) }}</span>
			  				<span class="month">{{ date("M",strtotime($show->date)) }}</span>
			  			</h4>
			  			<h2>{{ $show->heading }}</h2>
			  			<p class="time"><i class="fa fa-music fa-1x"></i> @ {{ date("g:ha",strtotime($show->date)) }}</p>
			  			<p>{{ String::tidy(Str::limit($show->content, 300)) }}</p>
			  			<p>
			  				<a class="btn btn-danger btn-sm" href="{{ $show->web_link }}" target="_blank">FIND OUT MORE <i class="fa fa-chevron-right fa-1x"></i></a>
			  			</p>
			  		</div>

			  	@endforeach

			</div>
		</div>
	</article>
 </section>

{{-- Signup Section --}}
<section id="signup" class="parallax">
	<div id="mic" class="parallax" data-pos="114%" data-speed="0.8">
		<div class="bg">
		   	<div class="container">

		   	<div class="row">
	   			<div class="col-md-12">
	   				<h2>Do You Want To Hear More?!</h2>
	   				<p>Feel like you just can't get enough <span>The Recovery Act</span> in your life? <span>Join our Newsletter</span>!<br>
	   				We'll make sure you keep in up to date on all the latest <span>News, Shows</span> amd More!!</p>
	   			</div>
			</div>
	   		<div class="row">
	   			<div class="col-md-3"></div>
	   			<div class="col-md-6">
	   				<form class="form-horizontal" role="form">
					  <div class="form-group">
					    <div class="input-group margin-bottom-sm">
							<span class="input-group-addon"><i class="fa fa-envelope-o fa-fw fa-inverse"></i></span>
							<input class="form-control" type="text" placeholder="Your Email address">
						</div>
					  </div>
					  <div class="form-group">
					      <button type="submit" class="btn btn-primary btn-lg btn-block">SIGN UP, AND KEEP IN TOUCH! <i class="fa fa-chevron-right fa-1x"></i></button>
					  </div>
					</form>
	   			</div>
	   			<div class="col-md-3"></div>
			</div>
		</div>
	</div>
</section>

@stop
