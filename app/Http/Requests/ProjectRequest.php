<?php

namespace App\Http\Requests;

use App\Rules\MaxHashtagLength;
use App\Rules\MaxNumberHashtags;
use App\Services\HashTagService;
use Illuminate\Foundation\Http\FormRequest;

class ProjectRequest extends FormRequest
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
            'hashtags' => [
                'required',
                'max:1280',
                'starts_with:#',
                new MaxNumberHashtags(new HashTagService()),
                new MaxHashtagLength(new HashTagService())
            ]
        ];
    }
}
