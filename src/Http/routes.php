<?php
//'prefix'=>'api/v1',
Route::group([ 'prefix'			=>'admin',
				'middleware' 	=> ['web', 'throttle', 'auth', 'admin'],
				'namespace' 	=> 'App\Http\Controllers\Admin'], 
             function(){
    Route::resource('galleries', 'PhotoGalleryController', ['only' => ['index', 'show','create', 'store', 'edit', 'update', 'destroy']]);

    Route::post('galleries/{galleries}/upload', ['as' => 'admin.galleries.upload', 'uses' => 'PhotoGalleryController@upload']);
		Route::get('galleries/{galleries}/photo-upload', ['as' => 'admin.galleries.photo-upload', 'uses' => 'PhotoGalleryController@getUpload']);
});
