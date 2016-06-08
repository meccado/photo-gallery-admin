<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PhotoGallery extends Model
{
    protected $fillable = ['name','description', 'created_by', 'sort_order', 'published'];

    public function photos()
    {
      return $this->hasMany(\App\Photo::class);
    }
}
