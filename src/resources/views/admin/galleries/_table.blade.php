<table id="datatable" class="table table-striped table-hover table-responsive datatable">
    <thead>
        <tr>
            <th>{!!trans('photo_gallery::gallery.galleries-create-name_label') !!}</th>
            <th>{!!trans('photo_gallery::gallery.galleries-create-description_label')!!}</th>
            <th>&nbsp;</th>
        </tr>
    </thead>

    <tbody>
        @foreach ($galleries as $gallery)
            <tr>
                <td>
                    {{$gallery->name}}
                    <div class="col-md-2">
                        <a href="{{route('admin.galleries.photo-upload',['id'=>$gallery->id])}}"
                            data-toggle="tooltip"
                            data-original-title="{!!trans('photo_gallery::gallery.photos-upload-btnupload') !!}"
                            class="btn btn-default"><i class="fa fa-upload"></i></a>
                    </div>
                    <span class="badge progress-bar-success pull-right">
                        {{$gallery->photos != null ? $gallery->photos()->count() : 0}} image(s) loaded
                    </span>
                </td>
                <td>{{$gallery->description}}</td>
                <td>
                    <div class="row">
                        <div class="col-md-2">
                            <a href="{{route('admin.galleries.show', ['id'=>$gallery->id])}}"
                                data-toggle="tooltip"
                                data-original-title="{!!trans('photo_gallery::gallery.galleries-view_tooltip') !!}"
                                class="btn btn-primary"><i class="fa fa-eye"></i></a>
                        </div>
                        <div class="col-sm-1"></div>
                        <div class="col-md-2">
                            <a href="{{route('admin.galleries.edit',['id'=>$gallery->id])}}"
                                data-toggle="tooltip"
                                data-original-title="{!!trans('photo_gallery::gallery.galleries-update-btnupdate') !!}"
                                class="btn btn-info"><i class="fa fa-pencil"></i></a>
                        </div>
                        <div class="col-sm-1"></div>
                        <div class="col-md-2">
                            {!! Form::open(['route' => ['admin.galleries.destroy', $gallery->id],
                            'class' => 'form-horizontal confirm',
                            'role' => 'form', 'method' => 'DELETE']) !!}
                                <button data-toggle="tooltip"
                                    data-original-title="{{trans('photo_gallery::gallery.galleries-delete-btndelete') }}"
                                    type="submit" class="btn btn-danger confirm-btn">
                                        <i class="fa fa-trash-o"></i>
                                </button>
                            {!! Form::close() !!}
                        </div>
                    </div>
                </td>
            </tr>
        @endforeach
    </tbody>
    <tfoot>
        <tr>
            <th>
                <button class="btn btn-primary" type="button">
                  {{trans('photo_gallery::gallery.galleries-counter_badge') }} <span class="badge">{{$galleries->count()}}</span>
                </button>
            </th>
        </tr>
    </tfoot>
</table>
