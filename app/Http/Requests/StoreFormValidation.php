<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreFormValidation extends FormRequest
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
            'email' => 'required|email|max:50',
            'password' =>  [
                'required',
                'string',
                'min:8', // must be at least 10 characters in length
                'regex:/[a-z]/', // must contain at least 1 lowercase letter
                'regex:/[A-Z]/', // must contain at least 1 uppercase letter
                'regex:/[0-9]/', // must contain at least 1 digit
                'regex:/[@$!%*#?&]/', // must contain a special character
            ],
        ];
    }
}
