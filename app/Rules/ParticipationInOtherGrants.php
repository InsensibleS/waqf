<?php

namespace App\Rules;

use Illuminate\Contracts\Validation\Rule;
use App\Repositories\GrantRepository;

class ParticipationInOtherGrants implements Rule
{
    protected $grantRepository;
    protected $startOrEndDate;
    protected $is_start;

    /**
     * Create a new rule instance.
     *
     * @param GrantRepository $grantRepository
     * @param $startOrEndDate
     * @param $is_start bool
     */
    public function __construct(GrantRepository $grantRepository, $startOrEndDate, $is_start = true)
    {
        $this->grantRepository = $grantRepository;
        $this->startOrEndDate = $startOrEndDate;
        $this->is_start = $is_start;
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
        $grants = $this->grantRepository->getFutureGrants();
        if($grants !== null) {
            foreach ($grants as $grant) {
                if(!$this->is_start && $value < $grant->start_date) {
                     if ($this->startOrEndDate >= $grant->start_date) {
                         return false;
                     }
                } elseif (!$this->is_start && $value >= $grant->start_date && $value <= $grant->end_date) {
                    return false;
                } elseif ($this->startOrEndDate < $grant->start_date && $value > $grant->end_date) {
                    return false;
                } elseif ($grant->start_date <= $value && $grant->end_date >= $value) {
                    return false;
                }
                return true;
            }
        }
    }

    /**
     * Get the validation error message.
     *
     * @return string
     */
    public function message()
    {
        return 'Grant cannot overlap with another grant, check dates.';
    }
}
