@extends('site.layouts.default')
{{-- Web site Title --}}

@section('title')
	{{{ Lang::get('Home Page') }}}
	@parent
@stop

{{-- Content --}}
@section('content')
<!-- Section #1 -->
<section id="home" data-speed="10" data-type="background">
   <article>
   	<div class="container">
   		<div class="row">
		  <div class="col-md-6">
		  	<h2>Heading For Things</h2>
		  	<p>According to the specification for Custom Data Attributes, any attribute that starts with data- will be treated as a storage area for private data. Additionally, this won’t affect the layout or presentation.
Since all we need to do is control the speed of the background images, we’ll use data-type="background" and data-speed="10" as key attributes to specify the necessary parameters.</p>
		  </div>
		  <div class="col-md-6">
		  	<h2>Heading For Things</h2>
		  	<p>According to the specification for Custom Data Attributes, any attribute that starts with data- will be treated as a storage area for private data. Additionally, this won’t affect the layout or presentation.
Since all we need to do is control the speed of the background images, we’ll use data-type="background" and data-speed="10" as key attributes to specify the necessary parameters.</p>
		  	<button class="btn btn-md btn-primary btn-lg">SIGN UP FOR OUR NEWS LETTER</button>
		  </div>
	 	 </div>
	 </div>
  </article>
</section>
<!-- Section #2 -->
<section id="news" data-speed="4" data-type="background">
	<div id="circleLeaf">
		<span class="fa-stack fa-lg fa-5x">
		  <i class="fa fa-circle fa-stack-2x "></i>
		  <i class="fa fa-sun-o fa-stack-1x fa-inverse"></i>
		</span>
	</div>
  <article>
   	<div class="container">
   		<div class="row">
		  <div class="col-md-6">
		  	<h2>Heading For Things</h2>
		  	<p>According to the specification for Custom Data Attributes, any attribute that starts with data- will be treated as a storage area for private data. Additionally, this won’t affect the layout or presentation.
Since all we need to do is control the speed of the background images, we’ll use data-type="background" and data-speed="10" as key attributes to specify the necessary parameters.</p>
		  	<button class="btn btn-md btn-primary btn-lg">SIGN UP FOR OUR NEWS LETTER</button>
		  </div>
		  <div class="col-md-6">
		  	<h2>Heading For Things</h2>
		  	<p>According to the specification for Custom Data Attributes, any attribute that starts with data- will be treated as a storage area for private data. Additionally, this won’t affect the layout or presentation.
Since all we need to do is control the speed of the background images, we’ll use data-type="background" and data-speed="10" as key attributes to specify the necessary parameters.</p>
		  	<button class="btn btn-md btn-primary btn-lg">SIGN UP FOR OUR NEWS LETTER</button>
		  </div>
	 	 </div>
	 </div>
  </article>
</section>
<!-- Section #3 -->
<section id="about" data-speed="4" data-type="background"></section>
<!-- Section #2 -->
<section id="signup" data-speed="4" data-type="background">
	<div id="circleLeaf">
		<span class="fa-stack fa-lg fa-5x">
		  <i class="fa fa-circle fa-stack-2x "></i>
		  <i class="fa fa-sun-o fa-stack-1x fa-inverse"></i>
		</span>
	</div>
  <article>
   	<div class="container">
   		<div class="row">
		  <div class="col-md-6">
		  	<h2>Heading For Things</h2>
		  	<p>According to the specification for Custom Data Attributes, any attribute that starts with data- will be treated as a storage area for private data. Additionally, this won’t affect the layout or presentation.
Since all we need to do is control the speed of the background images, we’ll use data-type="background" and data-speed="10" as key attributes to specify the necessary parameters.</p>
			<div class="form-group">
				<div class="input-group">
				  <span class="input-group-addon"><i class="fa fa-smile-o fa-fw"></i></span>
				  <input class="form-control" type="name" placeholder="Name">
				</div>
			</div>
			<div class="form-group">
				<div class="input-group">
				  <span class="input-group-addon"><i class="fa fa-envelope-o fa-fw"></i></span>
				  <input class="form-control" type="text" placeholder="Email address">
				</div>
			</div>
		  </div>
		  <div class="col-md-6">
		  	<h2>Heading For Things</h2>
		  	<p>According to the specification for Custom Data Attributes, any attribute that starts with data- will be treated as a storage area for private data. Additionally, this won’t affect the layout or presentation.
Since all we need to do is control the speed of the background images, we’ll use data-type="background" and data-speed="10" as key attributes to specify the necessary parameters.</p>
		  	<button class="btn btn-md btn-primary btn-lg">SIGN UP FOR OUR NEWS LETTER</button>
		  </div>
	 	 </div>
	 </div>
  </article>
</section>
<!-- Section #4 -->
<section id="shows" data-speed="4" data-type="background">
</section>


@stop
