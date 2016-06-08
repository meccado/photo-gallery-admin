<?php

namespace Meccado\PhotoGalleryAdmin\Http\Requests;

use Meccado\PhotoGalleryAdmin\Http\Requests\Request;

class PhotoFormRequest extends Request
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
        return [
            'file'    => 'required|mimes:jpeg,jpg,png,bmp,svg|image'
        ];
    }
}
