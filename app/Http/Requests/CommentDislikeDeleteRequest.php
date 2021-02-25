<?php

namespace App\Http\Requests;

use App\Rules\CheckIfUserHasDislikeThisComment;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rule;

class CommentDislikeDeleteRequest extends FormRequest
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
                Rule::exists('news_comments','id')->where(function ($query) {
                    $query->where('is_active', true);
                }),
                new CheckIfUserHasDislikeThisComment()
            ],
        ];
    }
}
