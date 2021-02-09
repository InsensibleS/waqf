<?php

namespace App\Http\Requests;

use App\Rules\CheckIfUserHasLikeThisNews;
use Illuminate\Foundation\Http\FormRequest;

class NewsLikeDeleteRequest extends FormRequest
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
            'news_id' => [
                'required',
                'integer',
                'exists:news,id',
                new CheckIfUserHasLikeThisNews()
            ],
        ];
    }
}
