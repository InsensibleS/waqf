<?php

namespace App\Rules;

use Illuminate\Contracts\Validation\Rule;
use App\Services\HashTagService;

class MaxHashtagLength implements Rule
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
        foreach ($this->hashTagService->getHashtagsFromString($value) as $hashtag) {
            if(strlen($hashtag) > 255)  {
                return false;
            }
        }
        return  true;
    }

    /**
     * Get the validation error message.
     *
     * @return string
     */
    public function message()
    {
        return 'Hashtag length cannot exceed 255 characters.';
    }
}
