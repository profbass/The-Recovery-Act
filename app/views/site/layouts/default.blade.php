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
		<meta name="viewport" content="width=device-width, initial-scale=1.0">

		<!-- CSS
		================================================== -->
        {{ Basset::show('public.css') }}

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
		<div id="topNav" class="navbar navbar-default navbar-fixed-top">
			 <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                </div>
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
					<!-- ./ nav-collapse -->
				</div>
			</div>
		</div>
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
	        <p class="muted credit">&copy; The Recovery Act 2013</p>
	      </div>
	    </div>

		<!-- Javascripts
		================================================== -->
        {{ Basset::show('public.js') }}
	</body>
</html>
