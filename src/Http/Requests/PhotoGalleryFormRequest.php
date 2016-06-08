<?php

namespace Meccado\PhotoGalleryAdmin\Http\Requests;

use Meccado\PhotoGalleryAdmin\Http\Requests\Request;

class PhotoGalleryFormRequest extends Request
{
  /**
  * Determine if the user is authorized to make this request.
  *
  * @return bool
  */
  public function authorize()
  {
    return true;
  }

  /**
  * Get the validation rules that apply to the request.
  *
  * @return array
  */
  public function rules()
  {
    switch ($this->method()) {
      case 'GET':
      case 'DELETE': {
        return [];
      }
      case 'POST': {
        return [
          'name'          => 'required|min:3|unique:photo_galleries',
          'description'   => 'required|min:3|max:255',
        ];
      }
      case 'PUT':
      case 'PATCH': {
        return [
          'name'          => 'required|min:3|unique:photo_galleries,name,'.$this->get('id'),
          'description'   => 'required|min:3|max:255',
        ];
      }
      default:
      break;
    }
    return [];
  }
}
