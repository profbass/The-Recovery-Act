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

{{-- About Section --}}
<section id="about" class="parallax">
	<div id="mic" class="parallax" data-pos="114%" data-speed="0.8">
		<div class="bg">
		   	<div class="container">
		   		<div class="row">

				  <div class="col-md-6">
				  	
				  </div>
				  <div class="col-md-6">
				  	
			 	 </div>
			 	</div>
			</div>
		</div>
	</div>
</section>

{{-- Shows --}}
<section id="shows" class="parallax" data-speed="0.7">
	<article class="animatedElement" data-animation="slideUp">
		<div class="container">
	   		<div class="row">

				@foreach($shows as $show)

			  		<div class="col-md-6">
			  			<h4>{{ $show->heading }}</h4>
			  			<p>{{ String::tidy(Str::limit($show->content, 200)) }}</p>
			  		</div>

			  	@endforeach

			</div>
		</div>
	</article>
 </section>

{{-- Blog Feed/News --}}
<section id="signup" class="parallax" data-speed="0.1">
  	<article class="bg">
	   	<div class="container">
	   		<div class="row">

				@foreach($blog as $posts)

			  		<div class="col-md-6">
			  			<h2>{{ $posts->title }}</h2>
			  			<p>{{ String::tidy(Str::limit($posts->content, 200)) }}</p>
			  		</div>

			  	@endforeach

			</div>
		</div>
  	</article>
</section>

@stop
