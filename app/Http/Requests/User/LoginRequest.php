<?php

namespace App\Http\Requests\User;

use Illuminate\Foundation\Http\FormRequest;

class LoginRequest extends FormRequest
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
            'email' => 'required|email|max:255',
            'password' => 'required|max:52',
        ];
    }

    public function messages()
    {
        return [
            'email.required' => trans('validation.required'),
            'email.max' => trans('validation.max.string'),
            'password' => trans('validation.required'),
            'password.max' => trans('validation.max.tring'),
        ];
    }
}
