<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class NotificationRequest extends FormRequest
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
            'search_word' => 'exclude_if:search_word,""|string|max:255',
            'filter' => 'exclude_if:filter,""|string|max:255',
            'page' => 'exclude_if:page,""|integer|min:1',
            'is_unread' => 'exclude_if:is_unread,""|bool',
            'sort_by_date' => 'exclude_if:sort_by_date,""|string',
        ];
    }
}
