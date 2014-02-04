@extends('site.layouts.default')
{{-- Web site Title --}}

@section('title')
	{{{ Lang::get('Home Page') }}}
	@parent
@stop

{{-- Content --}}
@section('content')
<!-- Section #1 -->
<section id="home" class="parallax" data-speed="0.1">
   <article>
   	<div class="container">
   		<!-- <div class="row">
		  <div class="col-md-6">
		  	<h2>Heading For Things</h2>
		  	<p>According to the specification for Custom Data Attributes, any attribute that starts with data- will be treated as a storage area for private data. Additionally, this won’t affect the layout or presentation.
Since all we need to do is control the speed of the background images, we’ll use data-type="background" and data-speed="10" as key attributes to specify the necessary parameters.</p>
		  </div>
		  <div class="col-md-6">
		  	<h2>Heading For Things</h2>
		  	<p>According to the specification for Custom Data Attributes, any attribute that starts with data- will be treated as a storage area for private data. Additionally, this won’t affect the layout or presentation.
Since all we need to do is control the speed of the background images, we’ll use data-type="background" and data-speed="10" as key attributes to specify the necessary parameters.</p>
		  	<button class="btn btn-md btn-danger btn-lg">SIGN UP FOR OUR NEWS LETTER</button>
		  </div>
	 	 </div>
	 </div> -->
  </article>
</section>
<!-- Section #2 -->
<section id="home-nav-bar" data-speed="4" data-type="background">
		<div class="container">
			 <div class="collapse navbar-collapse navbar-ex1-collapse">
				<ul class="nav navbar-nav left-nav">
					<li {{ (Request::is('/') ? ' class="active"' : '') }}><a href="{{{ URL::to('') }}}">Home</a></li>
					<li {{ (Request::is('/news') ? ' class="active"' : '') }}><a href="{{{ URL::to('/news') }}}">Shows</a></li>
					<li {{ (Request::is('/band') ? ' class="active"' : '') }}><a href="{{{ URL::to('/band') }}}">Band</a></li>
					<li {{ (Request::is('/photos') ? ' class="active"' : '') }}><a href="{{{ URL::to('/photos') }}}">Photos</a></li>
					<li {{ (Request::is('/blog') ? ' class="active"' : '') }}><a href="{{{ URL::to('/blog') }}}">Blog</a></li>
				</ul>

			    <ul class="nav navbar-nav pull-right sn-list">
			    <li>
			        	<a href="{{{ URL::to('/contact-us') }}}" target="_blank" title="" class="sn-links email">
			            	<span class="fa-stack fa-lg fa-1x">
							  <i class="fa fa-circle fa-stack-2x fa-inverse"></i>
							  <i class="fa fa-envelope-o fa-stack-1x"></i>
							</span>
						</a>
			        </li>
			        <li>
			        	<a href="https://www.facebook.com/TheRecoveryAct" target="_blank" title="" class="sn-links facebook">
			            	<span class="fa-stack fa-lg fa-1x">
							  <i class="fa fa-circle fa-stack-2x fa-inverse"></i>
							  <i class="fa fa-facebook fa-stack-1x"></i>
							</span>
						</a>
			        </li>
			        <li>
			            <a href="#" target="_blank" title="" class="sn-links twitter">
			            	<span class="fa-stack fa-lg fa-1x">
							  <i class="fa fa-circle fa-stack-2x fa-inverse"></i>
							  <i class="fa fa-twitter fa-stack-1x"></i>
							</span>
						</a>
			        </li>
			    </ul>
			</div>
	</div>
	<div id="circleLeaf">
		<span class="fa-stack fa-lg fa-5x">
		  <i class="fa fa-circle fa-stack-2x "></i>
		  <i class="fa fa-sun-o fa-stack-1x fa-inverse"></i>
		</span>
	</div> 
</section>
<!-- Section #3 -->
<section id="about" class="parallax">
	<div id="guitar" class="pull-right parallax animatedElement" data-animation="slideUp" data-pos="114%" data-speed="0.8"></div>
	<article class="bg">
	   	<div class="container">
	   		<div class="row">
			  <div class="col-md-6">
			  	<h2>Signup For Our Newsletter!</h2>
			  	<p>Get all the upcoming news and show information directly from us!</p>
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
				<div class="form-group">
					<div class="input-group">
			  			<button class="btn btn-md btn-danger btn-lg">SIGN UP FOR THE TRA NEWS LETTER!</button> 
					</div>
				</div>
			  </div>
			  <div class="col-md-6">
			  </div>
		 	 </div>
		</div>
	</article>
</section>
<!-- Section #2 -->
<section id="signup" class="parallax" data-speed="0.1" data-pos="-100px">
  <article class="bg">
   	<div class="container">
   		<div class="row">
		  <div class="col-md-6">
		  	
		  </div>
		  <div class="col-md-6">
		  	
	 	 </div>
	 </div>
  </article>
</section>
<!-- Section #4 -->
<section id="shows" class="parallax" data-speed="0.7">
  <article class="animatedElement" data-animation="slideUp">
   	<div class="container">
	   	<div class="row">
			<div class="col-md-6">
			  	<h2>Heading For Things</h2>
			  	<p>According to the specification for Custom Data Attributes, any attribute that starts with data- will be treated as a storage area for private data. Additionally, this won’t affect the layout or presentation.Since all we need to do is control the speed of the background images, we’ll use data-type="background" and data-speed="10" as key attributes to specify the necessary parameters.</p>
			</div>
			<div class="col-md-6"></div>
		</div>
	</div>
  </article>
 </section>
@stop
