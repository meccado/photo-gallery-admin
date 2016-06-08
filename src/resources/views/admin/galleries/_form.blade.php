@if (isset($gallery))
    {!! Form::model($gallery,
            ['route'     => ['admin.galleries.update', $gallery->id],
            'method'     => 'PUT',
            'class'      => 'form-horizontal',
            'files'      => true])
    !!}
@else
    {!! Form::open(['route'	=>'admin.galleries.store',
           'method'	=>'POST',
           'class'	=>'form-horizontal',
           'files'	=>'true',
           ])
    !!}
@endif
    <fieldset>
        <!-- Text input-->
        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
            {!! Form::label('name', trans("photo_gallery::gallery.galleries-create-name_label") , ['class'=>'col-md-3 control-label']) !!}
            <div class="col-md-9">
              {!! Form::text('name', old('name'), ['class'=>'form-control input-md', 'placeholder'=>trans('photo_gallery::gallery.galleries-create-name_placeholder'), 'required'=>'']) !!}
              @if ($errors->has('name'))
                  <span class="help-block">
                      <strong>{{ $errors->first('name') }}</strong>
                  </span>
              @endif
            </div>
        </div>
        <div class="form-group{{ $errors->has('description') ? ' has-error' : '' }}">
            {!! Form::label('description', trans("photo_gallery::gallery.galleries-create-description_label") , ['class'=>'col-md-3 control-label']) !!}
            <div class="col-md-9">
              {!! Form::textarea('description', old('description'), ['class'=>'form-control input-md', 'placeholder'=>trans('photo_gallery::gallery.galleries-create-description_placeholder'), 'required'=>'']) !!}
              @if ($errors->has('description'))
                  <span class="help-block">
                      <strong>{{ $errors->first('description') }}</strong>
                  </span>
              @endif
            </div>
        </div>
        <div class="form-group">
            <label class="col-md-3 control-label" for="submit"></label>
            <div class="col-md-9 col-md-offset-3">
                <button id="submit" name="submit" class="btn btn-sm btn-success">
                    <span class="fa fa-ok-circle"></span>
                    @if (isset($gallery))
                        {{ trans("photo_gallery::gallery.galleries-update-btnupdate") }}
                    @else
                        {{trans("photo_gallery::gallery.galleries-create-btncreate") }}
                    @endif
                </button>
            </div>
        </div>

    </fieldset>
 {!! Form::close() !!}
