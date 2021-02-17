<?php

namespace App\Rules;

use App\Models\ProjectComment;
use Illuminate\Contracts\Validation\Rule;
use Illuminate\Support\Facades\Auth;

class CheckIfUserHasNoDislikeThisProjectComment implements Rule
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
        $customerCommentDislike = $projectComment ? $projectComment->projectCommentDislikes->where('customer_id', Auth::id())->first() : 0;

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
