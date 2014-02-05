@extends('admin.layouts.default')

{{-- Content --}}
@section('content')


<form action="/band/{{ $band->id }}/update/" class="container" style="margin-top:50px;">
	<div class="row">
		<div class="col-md-12">
			<div class="form-group">
			    <label for="exampleInputFile">First Name</label>
			    <input type="text" class="form-control" name="titleInput" value="{{ $band->first_name }}">
			    <p class="help-block">Band Member Name Goes Here</p>
	  		</div>
	  		<div class="form-group">
			    <label>Title</label>
			    <textarea class="form-control" name="bodyInput">{{ $band->bio }}</textarea>
			</div>
	  		<div class="form-group">
	  		<input type="submit" class="btn btn-primary" value="Update Band Member" />
	  		</div>
	  	</div>
	</div>
</form>


@stop
