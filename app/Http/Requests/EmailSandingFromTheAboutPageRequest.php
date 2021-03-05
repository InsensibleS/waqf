<?php


namespace App\Http\Requests;


use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class EmailSandingFromTheAboutPageRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {

        return [
            'name' => [
                'required',
                'max:255'
            ],

            'description' =>
                [
                    'required'
                ],

            'email' => [
                'required',
                'email',
                'max:255'
            ]
        ];
    }

    public function messages()
    {
        return [
            'email.required' => 'Email field is required',
            'email.email' => 'The email field must be a valid email',
            'name.required' => 'Name field is required',
            'description.required' => 'Description field is required',
        ];
    }
}
