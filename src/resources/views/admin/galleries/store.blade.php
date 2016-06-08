@extends('admin.layouts.admin-master')

@section('title')
     {{-- this page title --}}
     {!!(isset($title)) ? $title : 'Create Album Page'!!}
@stop

@section('content')
	<div class="box box-primary"><!-- .box -->
		<div class="box-header with-border"><!-- .box-header -->
			<h3 class="box-title pull-left">
				{{trans('photo_gallery::gallery.galleries-create-create_gallery') }}
			</h3>
		</div><!-- /.box-header -->

		<div class="box-body"><!-- .box-body -->
		    @include('photo_gallery::admin.galleries._form')
		</div><!-- /.box-body -->

		<div class="box-footer"><!-- .box-footer-->
			  {{trans('photo_gallery::gallery.galleries-create-footer') }}
		</div><!-- /.box-footer-->
	</div><!-- /.box -->
@endsection
