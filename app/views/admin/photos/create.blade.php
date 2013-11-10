@extends('admin.layouts.default')

{{-- Content --}}
@section('content')

<form class="container" style="margin-top:50px;">
	<div class="row">
		<div class="col-md-12">
			<div class="form-group">
			    <label for="exampleInputFile">Image Upload</label>
			    <input type="file" id="exampleInputFile">
			    <p class="help-block">Upload an image to the data pase here</p>
	  		</div>
	  		<div class="form-group">
	  		<input type="submit" class="btn btn-primary" value="Upload Image" />
	  		</div>
	  	</div>
	</div>
</form>

@stop