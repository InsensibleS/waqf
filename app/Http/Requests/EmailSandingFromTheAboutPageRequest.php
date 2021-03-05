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
}
