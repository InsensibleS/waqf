<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;
use App\Rules\LinkExpired;

class ValidateLinkToEmailChangeRequest extends FormRequest
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
            'change_email_token' => [
                'required',
                'max:32',
                Rule::exists('customers','registration_string')->where(function ($query) {
                    $query->where('is_registered', true);
                }),
                new LinkExpired()
            ],
            'new_email' => [
                'required',
                'email',
                Rule::unique('customers', 'email')
            ]
        ];
    }
}
