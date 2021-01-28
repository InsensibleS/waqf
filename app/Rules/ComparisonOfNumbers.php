<?php

namespace App\Rules;

use Illuminate\Contracts\Validation\Rule;

class ComparisonOfNumbers implements Rule
{
    protected $lessNumber;
    protected $moreNumber;

    /**
     * Create a new rule instance.
     *
     * @param string $checkDate
     * @param string $targetDate
     * @param string $invalidMessage
     */
    public function __construct($lessNumber, $moreNumber)
    {
        $this->lessNumber = $lessNumber;
        $this->moreNumber = $moreNumber;
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
        return $this->lessNumber < $this->moreNumber;
    }

    /**
     * Get the validation error message.
     *
     * @return string
     */
    public function message()
    {
        return 'The number of finalists must be less than the number of semi-finalists.';
    }
}
