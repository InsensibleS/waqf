<?php

namespace App\Http\Requests;

use App\Rules\IfCustomerHasPassword;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class ChangePasswordRequest extends FormRequest
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
            'password' => [
                'required',
                'string',
                'between:8,255',
                'confirmed',
                'regex:/^(?=.*[a-zA-Z])(?=.*\d).+$/'
            ],
            'old_password' => [
                'present',
                new IfCustomerHasPassword()
            ]
        ];
    }
}
