<div class="col-md-12">
    <div class="col-md-12" id="gallery_template">
        <div class="dropzone-previews"></div>
        {!! Form::open(['route'     => ['admin.galleries.upload', $gallery->id],
                        'method'	=>'POST',
                        'class'		=>'dropzone',
                        'id'		  =>'gallery_dropzone',
                        'files'		=>'true',

                    ])
        !!}
        {!! Form::close() !!}
    </div>
</div>
