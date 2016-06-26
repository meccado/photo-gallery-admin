<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input as Input;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\PhotoGallery as PhotoGallery;
use Meccado\PhotoGalleryAdmin\Http\Requests\PhotoGalleryFormRequest as PhotoGalleryFormRequest;
use Meccado\PhotoGalleryAdmin\Http\Requests\PhotoFormRequest as PhotoFormRequest;

class PhotoGalleryController extends Controller
{
    public function index()
    {
        $galleries = PhotoGallery::with('Photos')->get();
        //dd($photogalleries);
        //return  \Response::json(array('success'=>true,'data'=>$photoGalleries), 200);
        return \View::make('photo_gallery::admin.galleries.index')->with(compact('galleries'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Responses
     */
    public function create()
    {
        return \View::make('photo_gallery::admin.galleries.store');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(PhotoGalleryFormRequest $request)
    {
        $photoGallery = PhotoGallery::create([
            'name'          => $request->input('name'),
            'description'   => $request->input('description'),
            'created_by'    => \Auth::user() ? \Auth::user()->id : 0, // Auth::id();
            'published'     => $request->input('published') ? $request->input('published') : 0,
        ]);
        $photoGallery->save();
        return \Redirect::route('admin.galleries.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
       //$photoGallery = PhotoGallery::findOrFail($id);
        $gallery = PhotoGallery::with('Photos')->find($id);
      //  return response()->json([   'success'   =>true,
      //                               'status'    => 200,
      //                               'data'      =>$gallery,
      //                             ], 200);
       return \View::make('photo_gallery::admin.galleries.show')->with(compact('gallery'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $gallery = PhotoGallery::findOrFail($id);
        return \View::make('photo_gallery::admin.galleries.update')->with(compact('gallery'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(PhotoGalleryFormRequest $request, $id)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function getUpload($id)
    {
        $gallery = PhotoGallery::with('Photos')->find($id);
        return \View::make('photo_gallery::admin.galleries.upload')->with(compact('gallery'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function upload(PhotoFormRequest $request, $id)
    {
        if(Input::hasFile('file')) {
            $file = $request->file('file');

            $filename = uniqid() . $file->getClientOriginalName();

            $file->move('assets/upload/images', $filename );
            //dd($id);
            //$photoGallery = PhotoGallery::find($request->input('photo_gallery_id'));
            $photoGallery = PhotoGallery::find($id);
            $photo = $photoGallery->photos()->create([
                'gallery_id'    => $request->input('gallery_id'),
                'file_name'     => $filename,
                'file_size'     => $file->getClientSize(),
                'file_mime'     => $file->getClientMimeType(),
                'file_path'     => '/assets/upload/images/'.$filename,
                'created_by'    => \Auth::user() ? \Auth::user()->id : 0,
            ]);
            return response()->json($photo, 200);
        }else{
             return response()->json(false, 200);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $photoGallery = PhotoGallery::findOrFail($id);
        if(!( (\Auth::user() ? \Auth::user()->id : 0 )  == $photoGallery->created_by)){
            abort('403', 'You are not allowed to delete the photoAlbum.');
        }
        foreach($photoGallery->photos as $photo){
           unlink($photo->file_path);
        }

        $photoGallery->photos()->delete();
        $photoGallery->delete();
        return \Redirect::back();
    }
}
