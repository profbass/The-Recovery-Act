@extends('site.layouts.default')

{{-- Content --}}
@section('content')
	<section class="row">
		@foreach($news as $article)
			<div class="col-md-6">
				<h1>{{ $article->title }}</h1>
				<p>{{ $article->body }}</p>
			</div>
		@endforeach
	</section>
@stop
