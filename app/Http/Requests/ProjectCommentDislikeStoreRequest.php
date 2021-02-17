<?php

namespace App\Http\Requests;

use App\Rules\CheckIfUserHasNoDislikeThisProjectComment;
use Illuminate\Foundation\Http\FormRequest;

class ProjectCommentDislikeStoreRequest extends FormRequest
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
            'project_comment_id' => [
                'required',
                'integer',
                'exists:project_comments,id',
                new CheckIfUserHasNoDislikeThisProjectComment()
            ],
        ];
    }
}
