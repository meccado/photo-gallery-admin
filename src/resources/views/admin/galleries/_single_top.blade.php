<div class="col-md-12">
   <ul id="gallery-lists" style="margin: 0; padding: 0;">
        @foreach($gallery->photos as $photo)
            <li style="margin: 0; padding: 0; list-style: none; float: left; padding-right: 10px ">
                <a href="{{URL::to($photo->file_path)}}" data-lightbox="gallery" target="_blank">
                    <img src="{{asset($photo->file_path)}}" alt="{{$photo->file_name}}" class="img-responsive" style="width: 240px; height: 160; border: 2px solid black; margin-bottom: 10px">
                </a>
            </li>
        @endforeach
   </ul>
</div>
<div class="col-md-12">
    <h3>{{$gallery->name}} <small> :: {{$gallery->description}}</small></h3>
</div>
