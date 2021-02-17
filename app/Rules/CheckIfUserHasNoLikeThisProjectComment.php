<?php

namespace App\Rules;

use App\Models\ProjectComment;
use Illuminate\Contracts\Validation\Rule;
use Illuminate\Support\Facades\Auth;

class CheckIfUserHasNoLikeThisProjectComment implements Rule
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
        $customerComment = ProjectComment::find($value);
        $customerCommentLike = $customerComment ? $customerComment->projectCommentLikes->where('customer_id', Auth::id())->first() : 0;

        return !$customerCommentLike ? true : false;
    }

    /**
     * Get the validation error message.
     *
     * @return string
     */
    public function message()
    {
        return 'The customer already likes the current comment.';
    }
}
