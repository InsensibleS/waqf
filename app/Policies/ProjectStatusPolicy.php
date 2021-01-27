<?php

namespace App\Policies;

use App\Models\User;

class ProjectStatusPolicy extends DefaultPolicy
{
    public function delete(User $user)
    {
        return false;
    }
}
