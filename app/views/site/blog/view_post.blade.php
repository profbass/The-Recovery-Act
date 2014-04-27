@extends('site.layouts.default')

{{-- Web site Title --}}
@section('title')
{{{ String::title($post->title) }}} ::
@parent
@stop

{{-- Update the Meta Title --}}
@section('meta_title')
@parent

@stop

{{-- Update the Meta Description --}}
@section('meta_description')
@parent

@stop

{{-- Update the Meta Keywords --}}
@section('meta_keywords')
@parent

@stop

{{-- Content --}}
@section('content')

<section id="news-post">
	<div class="parallax" data-speed="0.8">
		<div class="container parallax" data-speed="0.1">
	   		<div class="row">
	   			<div class="col-md-8">
	   				<h1>{{ $post->title }}</h1>
	   				<p>Posted {{{ $post->date() }}}</p>
	   				<div>{{ $post->content() }}</div>
	   			</div>
	   			<div class="col-md-4">
	   				<a id="comments"></a>
					<h4>{{{ $comments->count() }}} Comments</h4>

					@if ($comments->count())
						@foreach ($comments as $comment)
							<div class="box">
								<h3>{{{ $comment->author->username }}}</h3>
								<span>{{{ $comment->date() }}}</span>
								<div>
									{{{ $comment->content() }}}
								</div>
							</div>
						@endforeach
					@else
						<hr />
					@endif
					<!-- Comment Add Form -->
					@if ( ! Auth::check())
						You need to be logged in to add comments.<br /><br />
						Click <a href="{{{ URL::to('user/login') }}}">here</a> to login into your account.
					@elseif ( ! $canComment )
						You don't have the correct permissions to add comments.
					@else

					@if($errors->has())
						<div class="alert alert-danger alert-block">
						<ul>
					@foreach ($errors->all() as $error)
						<li>{{ $error }}</li>
					@endforeach
						</ul>
						</div>
					@endif

						<h4>Add a Comment</h4>
						<form  method="post" action="{{{ URL::to($post->slug) }}}">
							<input type="hidden" name="_token" value="{{{ Session::getToken() }}}" />

							<textarea class="col-md-12 input-block-level" rows="4" name="comment" id="comment">{{{ Request::old('comment') }}}</textarea>

							<div class="form-group">
								<div class="col-md-12">
									<input type="submit" class="btn btn-default" id="submit" value="Submit" />
								</div>
							</div>
						</form>
					@endif
	   			</div>
	   		</div>
	   	</div>
	</div>
</section>




@stop
