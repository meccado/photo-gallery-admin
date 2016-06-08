@extends('admin.layouts.admin-master')

@section('title')
     {{-- this page title --}}
     {!!(isset($title)) ? $title : 'Update Album Page'!!}
@stop

@section('sidebar')
    @parent
@endsection

@section('content')
	<div class="box box-primary"><!-- .box -->
		<div class="box-header with-border"><!-- .box-header -->
			<h3 class="box-title pull-left">
				{{trans('photo_gallery::gallery.galleries-edit-edit_gallery') }}
			</h3>
		</div><!-- /.box-header -->

		<div class="box-body"><!-- .box-body -->
		    @include('photo_gallery::admin.galleries._form')
		</div><!-- /.box-body -->

		<div class="box-footer"><!-- .box-footer-->
			  {{trans('photo_gallery::gallery.galleries-edit-footer') }}
		</div><!-- /.box-footer-->
	</div><!-- /.box -->
@endsection
