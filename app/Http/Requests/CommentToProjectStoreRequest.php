<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class CommentToProjectStoreRequest extends FormRequest
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
            'project_id' => [
                'required',
                Rule::exists('projects', 'id')->where(function ($query) {
                    return $query->where('ban_comments', false);
                }),
            ],
            'answer_to' => 'integer|exists:project_comments,id',
            'content' => 'required|string'
        ];
    }
}
