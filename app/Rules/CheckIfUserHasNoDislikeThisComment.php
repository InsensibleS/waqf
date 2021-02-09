<?php

namespace App\Rules;

use App\Models\NewsComment;
use Illuminate\Contracts\Validation\Rule;
use Illuminate\Support\Facades\Auth;

class CheckIfUserHasNoDislikeThisComment implements Rule
{
    /**
     * Create a new rule instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Determine if the validation rule passes.
     *
     * @param  string  $attribute
     * @param  mixed  $value
     * @return bool
     */
    public function passes($attribute, $value)
    {
        $customerCommentDislike = NewsComment::find($value)->newsCommentDislikes->where('customer_id', Auth::id())->first();

        return !$customerCommentDislike ? true : false;
    }

    /**
     * Get the validation error message.
     *
     * @return string
     */
    public function message()
    {
        return 'The customer already dislikes the current comment.';
    }
}
