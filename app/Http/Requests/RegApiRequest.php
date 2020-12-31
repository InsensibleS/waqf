<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Request;

class RegApiRequest extends FormRequest
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
        $rules = [
            'provider' => 'required||max:255',
            'accessToken' => 'required||max:255',
            'name' => 'max:255',
            'email' => 'email',
            'userId' => 'required|max:255',
        ];
        switch ($this->getMethod())
        {
           case 'POST':
           return $rules;
       }
    }
}
