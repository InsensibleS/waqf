<?php


namespace App\Http\Requests;


use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rule;

class DislikeCommentsDeleteRequest extends FormRequest
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
            'news_comments_id' => [
                'required',
                'integer',
                'exists:news_comment_likes,news_comments_id',
                Rule::exists('news_comment_dislikes','news_comments_id')->where(function ($query) {
                    $query->where('customer_id', Auth::id());
                }),
            ],
        ];
    }

}
