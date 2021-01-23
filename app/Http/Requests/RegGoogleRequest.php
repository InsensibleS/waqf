<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RegGoogleRequest extends FormRequest
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
            'accessToken' => 'required||max:255',
            'profileObj.name' => 'required|max:255',
            'profileObj.email' => 'required|email',
            'googleId' => 'required|max:255',
            'profileObj.imageUrl' => 'max:255',
        ];
    }
}
