@extends('site.layouts.default')
{{-- Web site Title --}}

@section('title')
	{{{ Lang::get('Band') }}}
	@parent
@stop

{{-- Content --}}
@section('content')


@foreach($band as $member)
	
	<section style="padding-top:0;">
		<div id="{{ $member->first_name }}" class="band-list parallax" data-speed="0.1">
			<div id="{{ $member->first_name }}-cutout" class="band-list parallax" data-speed="0.5">
				<div class="container">
			   		<div class="row">
						<div class="col-md-6">
						  	<h2>{{ $member->first_name }} {{ $member->last_name }}</h2>
						  	<p>{{ $member->bio }}</p>
						  	{{ $member->avatar }}
						</div>
					  	<div class="col-md-6">
					  	</div>
				 	</div>
				</div>
			</div>   	
		</div>
	</section>

@endforeach


<!-- Lindsay #1 -->
<section style="padding-top:0;">
	<div id="lindsay" class="band-list parallax" data-speed="0.1">
		<div id="lindsay-cutout" class="band-list parallax" data-speed="0.5">
			<div class="container">
		   		<div class="row">
					<div class="col-md-6">
					  	<h2>Heading For Things</h2>
					  	<p>According to the specification for Custom Data Attributes, any attribute that starts with data- will be treated as a storage area for private data. Additionally, this won’t affect the layout or presentation.
			Since all we need to do is control the speed of the background images, we’ll use data-type="background" and data-speed="10" as key attributes to specify the necessary parameters.</p>
					</div>
				  	<div class="col-md-6">
				  	</div>
			 	</div>
			</div>
		</div>   	
	</div>
</section>
<!-- Willy #1 -->
<section id="willy" class="band-list parallax" data-speed="0.1">
   <article>
   	<div class="container">
   		<div class="row">
		  <div class="col-md-6">
		  </div>
		  <div class="col-md-6">
		  	<h2>Heading For Things</h2>
		  	<p>According to the specification for Custom Data Attributes, any attribute that starts with data- will be treated as a storage area for private data. Additionally, this won’t affect the layout or presentation.
Since all we need to do is control the speed of the background images, we’ll use data-type="background" and data-speed="10" as key attributes to specify the necessary parameters.</p>
		  </div>
	 	 </div>
	 </div>
  </article>
</section>
<!-- Christian #1 -->
<section id="christian" class="band-list parallax" data-speed="0.4">
   <article>
   	<div class="container">
   		<div class="row">
		  <div class="col-md-6">
		  	<h2>Heading For Things</h2>
		  	<p>According to the specification for Custom Data Attributes, any attribute that starts with data- will be treated as a storage area for private data. Additionally, this won’t affect the layout or presentation.
Since all we need to do is control the speed of the background images, we’ll use data-type="background" and data-speed="10" as key attributes to specify the necessary parameters.</p>
		  </div>
		  <div class="col-md-6">
		  </div>
	 	 </div>
	 </div>
  </article>
</section>
  <!-- Tyler #1 -->
<section id="tyler" class="band-list parallax" data-speed="0.1">
   <article>
   	<div class="container">
   		<div class="row">
		  <div class="col-md-6">
		  </div>
		  <div class="col-md-6">
		  	<h2>Heading For Things</h2>
		  	<p>According to the specification for Custom Data Attributes, any attribute that starts with data- will be treated as a storage area for private data. Additionally, this won’t affect the layout or presentation.
Since all we need to do is control the speed of the background images, we’ll use data-type="background" and data-speed="10" as key attributes to specify the necessary parameters.</p>
		  </div>
	 	 </div>
	 </div>
  </article>
 </section>
 <!-- Bird Dog #1 -->
<section id="birddog" class="band-list parallax" data-speed="0.4">
   <article>
   	<div class="container">
   		<div class="row">
		  <div class="col-md-6">
		  	<h2>Heading For Things</h2>
		  	<p>According to the specification for Custom Data Attributes, any attribute that starts with data- will be treated as a storage area for private data. Additionally, this won’t affect the layout or presentation.
Since all we need to do is control the speed of the background images, we’ll use data-type="background" and data-speed="10" as key attributes to specify the necessary parameters.</p>
		  </div>
		  <div class="col-md-6">
		  </div>
	 	 </div>
	 </div>
  </article>
</section>
  <!-- Eagle #1 -->
<section id="eagle" class="band-list parallax" data-speed="0.1">
   <article>
   	<div class="container">
   		<div class="row">
		  <div class="col-md-6">
		  	<h2>Heading For Things</h2>
		  	<p>According to the specification for Custom Data Attributes, any attribute that starts with data- will be treated as a storage area for private data. Additionally, this won’t affect the layout or presentation.
Since all we need to do is control the speed of the background images, we’ll use data-type="background" and data-speed="10" as key attributes to specify the necessary parameters.</p>
		  </div>
		  <div class="col-md-6">
		  </div>
	 	 </div>
	 </div>
  </article>
</section>

@stop