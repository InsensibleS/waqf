<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class SendLinkToRegistrationRequest extends FormRequest
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
            'email' => [
                'required',
                'email',
                'max:255',
                Rule::unique('customers', 'email')->where(function ($query) {
                    return $query->where('is_registered', true);
                })
            ]
        ];
    }

    public function messages()
    {
        return [
            'email.required' => 'Email field is required',
            'email.email' => 'The email field must be a valid email',
            'email.unique' => 'This email is already registered',
        ];
    }
}
