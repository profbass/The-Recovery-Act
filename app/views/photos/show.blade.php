@extends('site.layouts.default')
{{-- Web site Title --}}
@section('title')
{{{ Lang::get('site.home') }}} ::
@parent
@stop

{{-- Content --}}
@section('content')
	<section>
		<figure>
			<img src="{{ $photo->path }}" width="200" alt="{{$photo->id}}" />
			<figcaption>{{ $photo->caption }}</figcaption>
		</figure>
	</section>
@stop