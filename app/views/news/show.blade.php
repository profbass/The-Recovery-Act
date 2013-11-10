@extends('site.layouts.default')
{{-- Web site Title --}}
@section('title')
{{{ Lang::get('site.home') }}} ::
@parent
@stop

{{-- Content --}}
@section('content')
	<section>
			<h1>{{ $news->title }}</h1>
			<p>{{ $news->body }}</p>
	</section>
@stop