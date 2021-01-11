<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RegFbRequest extends FormRequest
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
            'name' => 'max:255',
            'email' => 'email',
            'userID' => 'required|max:255',
            'picture.data.url' => 'max:255'
        ];
    }
}
