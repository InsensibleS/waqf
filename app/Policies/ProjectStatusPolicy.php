<?php

namespace App\Policies;

use App\Models\User;

class ProjectStatusPolicy extends DefaultPolicy
{
    public function viewAny(User $user)
    {
        return true;
    }

    public function view(User $user)
    {
        return true;
    }

    public function delete(User $user)
    {
        return false;
    }

    public function create(User $user)
    {
        return false;
    }
}
