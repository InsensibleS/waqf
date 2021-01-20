<?php

namespace App\Http\Requests;

use App\Rules\MaxHashtagLength;
use App\Rules\MaxNumberHashtags;
use App\Services\HashTagService;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class ProjectStoreRequest extends FormRequest
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
            'country_id' => 'required|integer|exists:countries,id',
            'grant_id' => [
                'required',
                'integer',
                Rule::exists('grants','id')->where(function ($query) {
                    $query->where('grant_stage_id', 2);
                }),
            ],
            'title' => 'required||max:255',
            'description' => 'required|max:10000',
            'hashtags' => [
                'required',
                'max:1280',
                'starts_with:#',
                new MaxNumberHashtags(new HashTagService()),
                new MaxHashtagLength(new HashTagService())
            ],
            'images.0' => 'required',
            'images.*' => 'file|max:15000|mimes:jpg,gif,png|dimensions:max_width=5000, max_height=5000'
        ];
    }
}
