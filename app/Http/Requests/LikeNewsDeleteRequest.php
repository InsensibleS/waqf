<?php

namespace App\Http\Requests;


use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rule;


class LikeNewsDeleteRequest extends FormRequest
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
                  Rule::exists('news_likes','news_id')->where(function ($query) {
                      $query->where('customer_id', Auth::id());
                  }),
            ],
        ];
    }
}
