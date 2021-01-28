<?php

namespace App\Rules;

use Illuminate\Contracts\Validation\Rule;

class СomparisonOfBooleanFields implements Rule
{
    protected $firstBoolean;
    protected $secondBoolean;

    /**
     * Create a new rule instance.
     *
     * @param string $checkDate
     * @param string $targetDate
     * @param string $invalidMessage
     */
    public function __construct($firstBoolean, $secondBoolean)
    {
        $this->firstBoolean = $firstBoolean;
        $this->secondBoolean = $secondBoolean;
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
        if(($this->firstBoolean == true) and ($this->secondBoolean ==true)){
            return  false;
        }
        return true;
    }

    /**
     * Get the validation error message.
     *
     * @return string
     */
    public function message()
    {
        return 'One piece of news cannot be a priority and main at the same time.';
    }
}
