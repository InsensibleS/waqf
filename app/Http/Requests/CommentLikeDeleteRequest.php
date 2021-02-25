<?php

namespace App\Http\Requests;

use App\Rules\CheckIfUserHasLikeThisComment;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class CommentLikeDeleteRequest extends FormRequest
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
            'news_comment_id' => [
                'required',
                'integer',
                'exists:news_comments,id',
                Rule::exists('news_comments','id')->where(function ($query) {
                    $query->where('is_active', true);
                }),
                new CheckIfUserHasLikeThisComment()
            ],
        ];
    }
}
