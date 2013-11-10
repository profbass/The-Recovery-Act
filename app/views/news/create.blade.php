@extends('site.layouts.default')

{{-- Content --}}
@section('content')


<form action="/news" class="container" style="margin-top:50px;">
	<div class="row">
		<div class="col-md-12">
			<div class="form-group">
			    <label for="exampleInputFile">Title</label>
			    <input type="text" class="form-control" name="titleInput" value="" placeholder="Enter News Title Here">
			    <p class="help-block">News Title Goes Here</p>
	  		</div>
	  		<div class="form-group">
			    <label>Title</label>
			    <textarea class="form-control" name="bodyInput" placeholder="Enter News Info Here"></textarea>
			</div>
	  		<div class="form-group">
	  		<input type="submit" class="btn btn-primary" value="Create News Article" />
	  		</div>
	  	</div>
	</div>
</form>


@stop
