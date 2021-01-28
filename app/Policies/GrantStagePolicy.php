<?php

namespace App\Policies;

use App\Models\User;

class GrantStagePolicy extends DefaultPolicy
{
    public function delete(User $user)
    {
        return false;
    }
}
