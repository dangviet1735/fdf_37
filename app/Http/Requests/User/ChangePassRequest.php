<?php

namespace App\Http\Requests\User;

use Illuminate\Foundation\Http\FormRequest;

class ChangePassRequest extends FormRequest
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
                    //
                ];
            }
            case 'PUT':
            case 'PATCH':
            {
                return [
                    'password' => 'required|min:5|max:255',
                    'rePassword' => 'required|same:password',
                ];
            }
            default:break;
        }
    }

    public function messages()
    {
        return [
            'password.required' => trans('validation.required'),
            'password.max' => trans('validation.max.string'),
            'password.min' => trans('validation.min.string'),
            'rePassword.required' => trans('validation.required'),
            'rePassword.same' => trans('validation.same'),
        ];
    }
}
