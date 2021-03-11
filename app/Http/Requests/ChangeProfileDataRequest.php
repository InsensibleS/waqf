<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ChangeProfileDataRequest extends FormRequest
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
            'name' => [
                'string',
                'between:1,255',
            ],
            'phone' => [
                'string',
                'between: 5,255',
                'regex: /^(\+)?([()]?\d+[- ()]?){1,20}?$/'
            ]
        ];
    }
}
