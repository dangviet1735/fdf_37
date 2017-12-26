<?php

namespace App\Http\Requests\Admin;

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
        switch($this->method())
        {
            case 'GET':
            case 'DELETE':
            {
                return [];
            }
            case 'POST':
            {
                return [
                    'username' => 'required|max:255|min:6|unique:users,username',
                    'email' => 'required|email|unique:users,email',
                    'password' => 'required|max:255|min:6',
                    'rePassword' => 'required|same:password',
                    'address' => 'required|max:255',
                    'phone' => 'required|max:255',
                    'role' => 'required',
                ];
            }
            case 'PUT':
            case 'PATCH':
            {
                return [
                    'rePassword' => 'same:password',
                    'address' => 'required|max:255',
                    'phone' => 'required|max:255',
                    'role' => 'required',
                ];
            }
            default:break;
        }
    }

    public function messages()
    {
        return [
            'username.required' => trans('validation.required'),
            'username.max' => trans('validation.max.string'),
            'username.min' => trans('validation.min.string'),
            'username.unique' => trans('validation.unique'),
            'email.required' => trans('validation.required'),
            'email.email' => trans('validation.email'),
            'email.unique' => trans('validation.unique'),
            'password.required' => trans('validation.required'),
            'password.max' => trans('validation.max.string'),
            'password.min' => trans('validation.min.string'),
            'rePassword.required' => trans('validation.required'),
            'rePassword.same' => trans('validation.same'),
            'address.required' => trans('validation.required'),
            'address.max' => trans('validation.max.string'),
            'phone.required' => trans('validation.required'),
            'phone.max' => trans('validation.max.string'),
            'role.required' => trans('validation.required'),
        ];        
    }
}
