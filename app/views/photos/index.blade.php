@extends('site.layouts.default')

@section
  {{ $isHome = 'no' }}
@endsection

{{-- Web site Title --}}
@section('title')
{{{ Lang::get('site.home') }}} ::
@parent
@stop

{{-- Content --}}
@section('content')
	<section>
		@foreach($photos as $photo)
			<figure>
				<img src="{{ $photo->path }}" width="200" alt="{{$photo->id}}" />
				<figcaption>{{ $photo->caption }}</figcaption>
			</figure>
		@endforeach
	</section>
@stop