<?php

namespace App\Rules;

use App\Models\ProjectComment;
use Illuminate\Contracts\Validation\Rule;
use Illuminate\Support\Facades\Auth;

class CheckIfUserHasLikeThisProjectComment implements Rule
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
        $projectComment = ProjectComment::find($value);
        $customerCommentLike = $projectComment ? $projectComment->projectCommentLikes->where('customer_id', Auth::id())->first() : 1;

        return $customerCommentLike ? true : false;
    }

    /**
     * Get the validation error message.
     *
     * @return string
     */
    public function message()
    {
        return 'The current customer has no like this comment.';
    }
}
