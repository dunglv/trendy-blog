<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserRequest extends FormRequest
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
            'username' => 'required|min:6|max:50|unique:users,name',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|min:6|max:50',
            'confirmpassword' => 'required|same:password',
            'term' => 'required'
        ];
    }

    public function messages()
    {
        return [
            'confirmpassword.same' => 'Confirm password not match',
            'term.required' => 'You didn\'t agree with our term and Privacy Policy.'
        ];
    }
}
