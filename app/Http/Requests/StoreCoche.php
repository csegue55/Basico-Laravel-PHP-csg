<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreCoche extends FormRequest
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
        return ([
            'id_propietario'=>'required|max:20',
            'marca'=>'required|max:50',
            'modelo'=>'required|max:25',
            'color'=>'required|max:25'
        ]);
    }
}
