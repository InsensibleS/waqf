<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class GetAllProjectsRequest extends FormRequest
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
            'hashtag_id' => 'exclude_if:hashtag_id,""|integer|exists:hashtags,id',
            'search_word' => 'exclude_if:search_word,""|string|max:255',
            'filter' => 'exclude_if:filter,""|string|max:255',
            'page' => 'exclude_if:page,""|integer|min:1',
            'country_id' => 'exclude_if:country_id,""|integer|exists:countries,id',
        ];
    }
}
