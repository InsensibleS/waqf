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
        ];

//        accessToken: "........."
//data_access_expiration_time: 1617093162
//email: "maximanaliev@gmail.com"
//expiresIn: 5238
//graphDomain: "facebook"
//id: "2901219159915677"
//name: "Mid Point"
//picture: {data: {…}}
//signedRequest: ".........."
//userID: "2901219159915677"
    }
}
