@extends('site.layouts.default')
{{-- Web site Title --}}
@section('title')
{{{ Lang::get('site.home') }}} ::
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
		  	<button class="btn btn-md">SIGN UP FOR OUR NEWS LETTER</button>
		  </div>
	 	 </div>
	 </div>
  </article>
</section>
<!-- Section #2 -->
<section id="about" data-speed="4" data-type="background">
  <article>Simple Parallax Scroll</article>
</section>




@stop
