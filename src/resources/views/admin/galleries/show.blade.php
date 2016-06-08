@extends('admin.layouts.admin-master')

@section('title')
     {{-- this page title --}}
     {!!(isset($title)) ? $title : 'Show Album Page'!!}
@stop

@section('styles')
	<!--link rel="stylesheet" href="{{ asset('assets/dropzone/css/dropzone.css') }}"-->
	<link href="https://cdnjs.cloudflare.com/ajax/libs/dropzone/4.2.0/dropzone.css" rel="stylesheet">
	<link href="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.8.2/css/lightbox.css" rel="stylesheet">
	<!--link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" rel="stylesheet"-->
@endsection

@section('content')
  <div class="container">
    <p>
        <a href="{{  route('admin.galleries.photo-upload', ['photogalleries' => $gallery->id]) }}"
          class="btn btn-default btn-flat"><i class="fa fa-upload pull-right"></i>
            {{trans('photo_gallery::gallery.photos-upload-add_new')}}
        </a>
    </p>
    @if($gallery != null)
        <div class="box box-primary"><!-- .box -->
            <div class="box-header with-border"><!-- .box-header -->

                <h3 class="box-title pull-left">
                    {!!trans('photo_gallery::gallery.galleries-show-gallery')!!}
                </h3>
            </div><!-- /.box-header -->

            <div class="box-body"><!-- box-body -->
                <div class="row">
                    @include('photo_gallery::admin.galleries._single_top')
                </div>
            </div><!-- /.box-body -->

            <div class="box-footer"><!-- .box-footer-->
              {{trans('photo_gallery::gallery.galleries-show-footer') }}
            </div><!-- /.box-footer-->

        </div><!-- /.box -->
    @else
        {{trans('photo_gallery::gallery.galleries-show-no_entry_found') }}
    @endif
  </div>
@endsection

@section('scripts')
	<!--script src="{{ asset('assets/dropzone/js/dropzone.js') }}"></script-->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/dropzone/4.2.0/dropzone.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.8.2/js/lightbox.js"></script>
	<script>
		Dropzone.options.galleryDropzone = {
			//autoProcessQueue	: false,
			//uploadMultiple		: true,
			maxFilesize			: 10,
			maxFiles			: 2,
			acceptedFiles       : 'image/*',
      thumbnailWidth      : 180,
      thumbnailHeight     : 120,
      parallelUploads     : 100,
			/*success             : function(file, response){
                if(file.status == 'success'){
                    handleResponse.handleSuccess(response);
                }else{
                    handleResponse.handleError(response);
                }
			}

			/*var handleResponse = {
			      handleSuccess  : function(response){

			     },
			     handleSuccess  : function(response){

			     },
			};


			init: function() {
				//this.on("addedfile", function(file) { alert("Added file."); });
				var submitButton = document.querySelector('#submit-all');
				gallaryDropzone = this;
				submitButton.addEventListener("click", function(e){
					e.preventDefault();
					e.stopPropagation();
					gallary.processQueue();
				});

				this.on("sendingmultiple", function() {
					alert("Sending Multiple files");
				});

				this.on("successmultiple", function(file, response) {
					alert("Successfuly Adding Multiple files.");
				});

				this.on("errormultiple", function(file, response) {
					alert("Error Adding Multiple files.");
				});

				this.on("addedfile", function(file) {
					alert("Added file.");
				});

				this.on("complete", function(file, response) {
					alert("File Adding Complete.");
				});}*/
		};
	</script>
@endsection
