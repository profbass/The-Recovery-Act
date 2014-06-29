<!DOCTYPE html>
<html lang="en">
	<head>
		<!-- Basic Page Needs
		================================================== -->
		<meta charset="utf-8" />
		<title>The Recovery Act @section('title')
		@show
		</title>
		<meta name="keywords" content="your, awesome, keywords, here" />
		<meta name="author" content="Tyler Olmsted" />
		<meta name="description" content="Lorem ipsum dolor sit amet, nihil fabulas et sea, nam posse menandri scripserit no, mei." />

		<!-- Mobile Specific Metas
		================================================== -->
		<meta name="viewport" content="width=device-width, initial-scale=1">

		<!-- CSS
		================================================== -->
        <!-- Libs -->
		<link rel="stylesheet" type="text/css" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">
		<link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Gilda+Display|Rock+Salt|Open+Sans:300,400,600,800">
        <link rel="stylesheet" href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
        <!-- Grunt build -->
		<link rel="stylesheet" href="/assets/builds/styles.css">

		<style>
		@section('styles')
		@show
		</style>

		<!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
		<!--[if lt IE 9]>
		<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
		<![endif]-->

		<!-- Favicons
		================================================== -->
		<link rel="apple-touch-icon-precomposed" sizes="144x144" href="{{{ asset('assets/ico/apple-touch-icon-144-precomposed.png') }}}">
		<link rel="apple-touch-icon-precomposed" sizes="114x114" href="{{{ asset('assets/ico/apple-touch-icon-114-precomposed.png') }}}">
		<link rel="apple-touch-icon-precomposed" sizes="72x72" href="{{{ asset('assets/ico/apple-touch-icon-72-precomposed.png') }}}">
		<link rel="apple-touch-icon-precomposed" href="{{{ asset('assets/ico/apple-touch-icon-57-precomposed.png') }}}">
		<link rel="shortcut icon" href="{{{ asset('assets/ico/favicon.png') }}}">
	</head>

	<body>
		<!-- To make sticky footer need to wrap in a div -->
		<div id="wrap">
		<!-- Navbar -->
		<div id="logo" class="animatedElement" data-animation="slideInDown"><a href="/"><img src="assets/img/logo-tra.png" /></a>
		</div>

		<nav class="navbar navbar-fixed-top" role="navigation">
		    <!-- Brand and toggle get grouped for better mobile display -->
		    <div class="navbar-header hidden-sm">
		      	<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
			        <span class="sr-only">Toggle navigation</span>
			        <i class="fa fa-bars fa-2x"></i>
			    </button>
		    </div>

		    <!-- Collect the nav links, forms, and other content for toggling -->
		    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
		      	<ul class="nav navbar-nav nav-main">
					<li {{ (Request::is('/blog') ? ' class="active"' : '') }}>
							<a href="{{{ URL::to('/blog') }}}">
							news reel
							<span class="title hidden-xs">NEWS AND RANDOMNESS</span>
						</a>
					</li>
					<li style="padding-top:20px;" class="hidden-xs">/</li>
					<li {{ (Request::is('/news') ? ' class="active"' : '') }}>
						<a href="{{{ URL::to('/shows') }}}">
							shows
							<span class="title hidden-xs">COME SEE IT LIVE</span>
						</a>
					</li>
					<li style="padding-top:20px;" class="hidden-xs">/</li>
					<li {{ (Request::is('/band') ? ' class="active"' : '') }}>
						<a href="{{{ URL::to('/band') }}}">
							the band
							<span class="title hidden-xs">MEET THE ACT</span>
						</a>
					</li>
					<li style="padding-top:20px;" class="hidden-xs">/</li>
					<li {{ (Request::is('/news') ? ' class="active"' : '') }}>
						<a href="{{{ URL::to('/shows') }}}">
							media
							<span class="title hidden-xs">MUSIC, VIDEOS AND MORE!</span>
						</a>
					</li>
				</ul>

                <ul class="nav navbar-nav pull-right hidden-xs hidden-sm sn-list">
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
                    <!-- <li>
                        <a href="#" target="_blank" title="" class="sn-links twitter">
                        	<span class="fa-stack fa-lg fa-1x">
							  <i class="fa fa-circle fa-stack-2x fa-inverse"></i>
							  <i class="fa fa-twitter fa-stack-1x"></i>
							</span>
						</a>
                    </li> -->
                </ul>
            </div><!-- /.navbar-collapse -->
		</nav>
		
		<!-- ./ navbar -->

		<!-- Container -->
		<div id="content">
			<!-- Notifications -->
			@include('notifications')
			<!-- ./ notifications -->

			<!-- Content -->
			@yield('content')
			<!-- ./ content -->
		</div>
		<!-- ./ container -->

		<!-- the following div is needed to make a sticky footer -->
		<div id="push"></div>
		</div>
		<!-- ./wrap -->


	    <div id="footer">
	      <div class="container">
	        <div class="row-fluid">
				<div class="col-lg-5 col-md-4 col-sm-4 col-xs-12 col-mini">
					<h5>OUR SITE</h5>
					<p>
					  Thank you for visiting us! 
					  <br>
					  Development and Support: <a href="http://www.tylerolmsted.com?utm_source=devicelabAbout" target="blank"> tylerolmsted.com</a>
					  <br>
					</p>
					<p>Images: <a href="http://www.apix.ch/portfolio/?utm_source=devicelabSite" target="blank">APix Fotografie</a> 
					</p>

					<p role="navigation">
					  
					  <a href="/pages/terms-and-conditions" title="Terms and conditions">Terms and conditions</a>
					  
					  
					</p>

				</div>
				<div class="col-lg-3 col-sm-4 col-xs-6 col-mini">
					<h5>Contact Us</h5>
					<address>
						The Recovery Act<br>
					  	6100 E 39th Ave # A<br>
					  	Denver, CO 80207<br>
					  <a href="#">Send Us An Email</a>
					</address>
				</div>
				<div class="col-lg-4 col-sm-4 col-xs-6 col-mini">
					<h5>Connect</h5>
					<ul class="sn-list clearfix">				                	
						<li class="pull-left">
							<a href="mailto:profbass@gmail.com
							" target="_blank" title="" class="sn-links email">
								<span class="fa-stack fa-lg fa-1x">
								  <i class="fa fa-circle fa-stack-2x fa-inverse"></i>
								  <i class="fa fa-envelope-o fa-stack-1x"></i>
								</span>
							</a>
						</li>				                	
						<li class="pull-left">
							<a href="tyler.olmsted.1" target="_blank" title="" class="sn-links facebook">
								<span class="fa-stack fa-lg fa-1x">
								  <i class="fa fa-circle fa-stack-2x fa-inverse"></i>
								  <i class="fa fa-facebook fa-stack-1x"></i>
								</span>
							</a>
						</li>				                	
						<li class="pull-left">
							<a href="@profbass" target="_blank" title="" class="sn-links twitter">
								<span class="fa-stack fa-lg fa-1x">
								  <i class="fa fa-circle fa-stack-2x fa-inverse"></i>
								  <i class="fa fa-twitter fa-stack-1x"></i>
								</span>
							</a>
						</li>
					</ul>
				</div>
			</div>
	      </div>
	    </div>

		<!-- Javascripts
		================================================== -->
		<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js"></script>
		<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
		<script src="/assets/builds/TRA.min.js"></script>
        
	</body>
</html>
