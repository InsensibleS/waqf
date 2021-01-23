<?php

namespace App\Rules;

use Illuminate\Contracts\Validation\Rule;

class ValidEqualDate implements Rule
{
    protected $checkDate;
    protected $targetDate;
    protected $invalidMessage;

    /**
     * Create a new rule instance.
     *
     * @param string $checkDate
     * @param string $targetDate
     * @param string $invalidMessage
     */
    public function __construct($checkDate, $targetDate, $invalidMessage)
    {
        $this->checkDate = $checkDate;
        $this->targetDate = $targetDate;
        $this->invalidMessage = $invalidMessage;
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
        return $this->checkDate <= $this->targetDate;
    }

    /**
     * Get the validation error message.
     *
     * @return string
     */
    public function message()
    {
        return $this->invalidMessage;
    }
}
