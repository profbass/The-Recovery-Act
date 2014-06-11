@extends('admin.layouts.modal')

{{-- Content --}}
@section('content')
	<!-- Tabs -->
		<ul class="nav nav-tabs">
			<li class="active"><a href="#tab-general" data-toggle="tab">General</a></li>
		</ul>
	<!-- ./ tabs -->

	{{-- Edit Shows Form --}}
	<form class="form-horizontal" method="post" action="@if (isset($show)){{ URL::to('admin/shows/' . $show->id . '/edit') }}@endif" autocomplete="off">
		<!-- CSRF Token -->
		<input type="hidden" name="_token" value="{{{ csrf_token() }}}" />
		<!-- ./ csrf token -->

		<!-- Tabs Content -->
		<div class="tab-content">
			<!-- General tab -->
			<div class="tab-pane active" id="tab-general">
				<!-- Post Title -->
				<div class="form-group {{{ $errors->has('title') ? 'error' : '' }}}">
                    <div class="col-md-12">
                        <label class="control-label" for="title">Post Venue</label>
						<input class="form-control" type="text" name="venue" id="venue" value="{{{ Input::old('venue', isset($show) ? $show->venue : null) }}}" />
						{{{ $errors->first('venue', '<span class="help-inline">:message</span>') }}}
					</div>
				</div>
				<!-- ./ post title -->

				<!-- Content -->
				<div class="form-group {{{ $errors->has('content') ? 'error' : '' }}}">
					<div class="col-md-12">
                        <label class="control-label" for="content">Content</label>
						<textarea class="form-control full-width wysihtml5" name="content" value="content" rows="10">{{{ Input::old('content', isset($show) ? $show->content : null) }}}</textarea>
						{{{ $errors->first('content', '<span class="help-inline">:message</span>') }}}
					</div>
				</div>
				<!-- ./ content -->
			</div>
			<!-- ./ general tab -->

			<!-- Meta Data tab -->
			<div class="tab-pane" id="tab-meta-data">
				<!-- Meta Title -->
				<div class="form-group {{{ $errors->has('address') ? 'error' : '' }}}">
					<div class="col-md-12">
                        <label class="control-label" for="address">Address</label>
						<input class="form-control" type="text" name="address" id="address" value="{{{ Input::old('address', isset($show) ? $show->address : null) }}}" />
						{{{ $errors->first('address', '<span class="help-inline">:message</span>') }}}
					</div>
				</div>
				<!-- ./ meta title -->

				<!-- Web Link -->
				<div class="form-group {{{ $errors->has('web-link') ? 'error' : '' }}}">
					<div class="col-md-12 controls">
                        <label class="control-label" for="web-link">Meta Description</label>
						<input class="form-control" type="text" name="web-link" id="web-link" value="{{{ Input::old('web-link', isset($show) ? $show->web_link : null) }}}" />
						{{{ $errors->first('web-link', '<span class="help-inline">:message</span>') }}}
					</div>
				</div>
				<!-- ./ meta description -->

				<!-- Facebook Link -->
				<div class="form-group {{{ $errors->has('facebook-link') ? 'error' : '' }}}">
					<div class="col-md-12">
                        <label class="control-label" for="facebook-link">Meta Keywords</label>
						<input class="form-control" type="text" name="facebook-link" id="facebook-link" value="{{{ Input::old('facebook-link', isset($show) ? $show->facebook_link : null) }}}" />
						{{{ $errors->first('facebook-link', '<span class="help-inline">:message</span>') }}}
					</div>
				</div>
				<!-- ./ meta keywords -->
			</div>
			<!-- ./ meta data tab -->
		</div>
		<!-- ./ tabs content -->

		<!-- Form Actions -->
		<div class="form-group">
			<div class="col-md-12">
				<element class="btn-cancel close_popup">Cancel</element>
				<button type="reset" class="btn btn-default">Reset</button>
				<button type="submit" class="btn btn-success">Update</button>
			</div>
		</div>
		<!-- ./ form actions -->
	</form>
@stop
