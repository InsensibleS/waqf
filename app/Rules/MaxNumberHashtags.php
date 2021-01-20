<?php

namespace App\Rules;

use Illuminate\Contracts\Validation\Rule;
use App\Services\HashTagService;

class MaxNumberHashtags implements Rule
{
    protected $hashTagService;

    /**
     * Create a new rule instance.
     *
     * @param HashTagService $hashTagService
     */
    public function __construct(HashTagService $hashTagService)
    {
        $this->hashTagService = $hashTagService;
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
        return  6 > count($this->hashTagService->getHashtagsFromString($value));
    }

    /**
     * Get the validation error message.
     *
     * @return string
     */
    public function message()
    {
        return 'The number of hashtags cannot be more than 5.';
    }
}
