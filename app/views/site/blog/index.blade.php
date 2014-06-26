@extends('site.layouts.default')

{{-- Content --}}
@section('content')


<section id="news">
	<div class="content-banner parallax" data-pos="50%" data-speed="0.2">
		<div class="container parallax" data-speed="0.5">
	   		<div class="row">
	   			<div class="col-md-11 col-md-offset-1 title-wrapper">
	   				<h1>{ News }<br/> <span class="font-sans-serif">Updates, stroies and anything you need to know Recovery Act!</span></h1>
	   			</div>
	   		</div>
	   	</div>
	</div>
	   	<div class="container">
   			<div class="row">
				<div class="col-md-12">
					<p>&nbsp;</p>
	   				<div class="dec-border large-top"></div>
					<p>&nbsp;</p>
				</div>
			</div>
	   		<div class="row">
	   			<!-- Posts -->
				@foreach ($posts as $post)

					<div class="col-md-4 col-sm-6">
						<div class="box">
							<a href="{{{ $post->url() }}}"><img src="assets/img/bg-concert.jpg" /></a>
							<div style="padding:30px">
				  			<h2><a href="{{{ $post->url() }}}">{{ String::title($post->title) }}</a></h2>
				  			<p>{{ String::tidy(Str::limit(strip_tags($post->content, 200))) }}</p>
				  			<p>
								<i class="fa fa-user"></i> by <span class="muted">{{{ $post->author->username }}}</span>
								| <i class="fa fa-calandar"></i> <!--Sept 16th, 2012-->{{{ $post->date() }}}
								| <i class="fa fa-comment"></i> <a href="{{{ $post->url() }}}#comments">{{$post->comments()->count()}} {{ \Illuminate\Support\Pluralizer::plural('Comment', $post->comments()->count()) }}</a>
							</p>
				  			<a class="btn" href="{{{ $post->url() }}}">Learn More <i class="fa fa-chevron-right"></i></a>
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
					<p> {{ $posts->links() }}</a>
					</p>
				</div>
			</div>
		</div>
  	</div>
</section>

@stop
