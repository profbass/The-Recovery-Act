<div class="modal fade" id="imageLoader">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title">Image Uploader</h4>
      </div>
      <div class="modal-body">
        {{ Form::open(array('url' => 'upload', 'files' => true, 'method' => 'POST', 'id' => 'upload_modal_form', 'enctype' => 'multipart/form-data')) }}
        {{ Form::label('photo', 'photo') }}
        {{ Form::file('photo') }}
        {{ Form::label('description', 'Description') }}
        {{ Form::text('description', '', array('placeholder' => 'Image descript here', 'id' => 'description')) }}
        {{ Form::close() }}
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="button" id="saveImage" class="btn btn-primary">Upload Image</button>
      </div>
    </div>
  </div>
</div>

@section('scripts')

  <script type="text/javascript">
    $('#saveImage').on('click', function(event) {
      event.preventDefault();
      $('#upload_modal_form').submit();
    });
  </script>

@stop
