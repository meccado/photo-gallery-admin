<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Photo extends Model
{
  protected $fillable = ['photo_gallery_id', 'file_name', 'file_size', 'file_mime', 'file_path', 'created_by'];

  public function galleries()
  {
    return $this->belongsTo(\App\PhotoGallery::class);
  }
}
