<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class userRequest extends FormRequest
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
                 'username'=>'bail|required|unique:users,username|max:10',
                 //'password'=>'required|min:6',
                'password' => 'min:6|required_with:confirmpassword|same:confirmpassword',
                'confirmpassword' =>'required|min:6',
                'email' => 'required|email',
                'date' => 'required|',
                'file'=>'required|image|mimes:jpeg,png,jpg,gif,svg',
                 

        ];
    }  

   
    }    

