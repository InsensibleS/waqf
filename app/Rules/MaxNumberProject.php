<?php

namespace App\Rules;

use App\Repositories\ProjectRepository;
use Illuminate\Contracts\Validation\Rule;

class MaxNumberProject implements Rule
{
    protected $projectRepository;

    /**
     * Create a new rule instance.
     *
     * @param ProjectRepository $projectRepository
     */
    public function __construct(ProjectRepository $projectRepository)
    {
        $this->projectRepository = $projectRepository;
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
        $projectsInCurrentGrant = $this->projectRepository->getUserProjectsInGrant($value);

        return $projectsInCurrentGrant !== null ? count($projectsInCurrentGrant) < 3 : true;
    }

    /**
     * Get the validation error message.
     *
     * @return string
     */
    public function message()
    {
        return 'The number of projects in a grant cannot be more than three.';
    }
}
