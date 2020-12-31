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
            'name' => 'max:255',
            'email' => 'email',
            'googleId' => 'required|max:255',
        ];
    }

//email: "maksat.imanaliev@softlex.pro"
//familyName: "Иманалиев"
//givenName: "Максат"
//googleId: "113921764590254474699"
//imageUrl: "https://lh6.googleusercontent.com/-5lgeKO__aAY/AAAAAAAAAAI/AAAAAAAAAAA/AMZuucmGS0vfFJkJAUqK1N9Qa8jyD98SmA/s96-c/photo.jpg"
//name: "Максат Иманалиев"
}
