<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class GetMoreNewsRequest extends FormRequest
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
            'page' => [
                'required',
                'integer'
            ],
            'arrayMainNewsId' => 'required|array',
            'arrayMainNewsId.*' => 'exists:news,id',
            'hashtag_id' => 'integer|exists:news_hashtags,id',
            'search_word' => 'string|max:255'
        ];
    }
}
