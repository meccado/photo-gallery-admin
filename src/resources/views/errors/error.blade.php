@if(Session::has('message'))
    <div class="alert alert-success">
        {{ Session::get('message') }}
    </div>
@endif

@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            {!! implode('', $errors->all('
              <i class="fa fa-exclamation-triangle fa-1x"></i>
              <small class="error" style="color:black">:message</small>
            ')) !!}
        </ul>
    </div>
@endif
