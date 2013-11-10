@extends('site.layouts.default')

{{-- Content --}}
@section('content')


<form action="/news/{{ $news->id }}/update/" class="container" style="margin-top:50px;">
	<div class="row">
		<div class="col-md-12">
			<div class="form-group">
			    <label for="exampleInputFile">Title</label>
			    <input type="text" class="form-control" name="titleInput" value="{{ $news->title }}">
			    <p class="help-block">News Title Goes Here</p>
	  		</div>
	  		<div class="form-group">
			    <label>Title</label>
			    <textarea class="form-control" name="bodyInput">{{ $news->body }}</textarea>
			</div>
	  		<div class="form-group">
	  		<input type="submit" class="btn btn-primary" value="Update News" />
	  		</div>
	  	</div>
	</div>
</form>


@stop
