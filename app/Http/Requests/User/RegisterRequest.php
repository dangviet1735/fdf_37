<?php

namespace App\Http\Requests\User;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;

class RegisterRequest extends FormRequest
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
        // dd($this->id);
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
                    'username' => 'required|max:255|min:5',
                    'email' => 'required|email|unique:users,email',
                    'password' => 'required|max:255|min:6',
                    'rePassword' => 'required|same:password',
                    'address' => 'max:255',
                    'phone' => 'max:255',
                ];
            }
            case 'PUT':
            case 'PATCH':
            {
                return [
                    'username' => 'max:255',
                    'address' => 'max:255',
                    'phone' => 'max:255',
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
            'email.required' => trans('validation.required'),
            'email.email' => trans('validation.email'),
            'email.unique' => trans('validation.unique'),
            'password.required' => trans('validation.required'),
            'password.max' => trans('validation.max.string'),
            'password.min' => trans('validation.min.string'),
            'rePassword.required' => trans('validation.required'),
            'rePassword.same' => trans('validation.same'),
            'address.max' => trans('validation.max.string'),
            'phone.max' => trans('validation.max.string'),
        ];
    }
}
