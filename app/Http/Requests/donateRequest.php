<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class donateRequest extends FormRequest
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
                'name'=>'bail|required|max:10|min:4',
                //'option'=>'required',
                'tel' => 'required|regex:/(01)[0-9]{9}/',
                 'address' => 'required',
                 'date' => 'required|date'
        ];
    }
}
