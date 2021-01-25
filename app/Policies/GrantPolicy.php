<?php

namespace App\Policies;

use App\Models\User;
use App\Models\Grant;
use Illuminate\Auth\Access\HandlesAuthorization;

class GrantPolicy
{
    public function viewAny(User $user)
    {
        return $user->role->is_admin;
    }

    public function view(User $user)
    {
        return $user->role->is_admin;
    }

    public function create(User $user)
    {
        return $user->role->is_admin;
    }

    public function update(User $user, Grant $grant)
    {
        if($user->role->is_admin) {
            return $grant->grant_stage_id === 1;
        }

        return false;
    }

    public function delete(User $user)
    {
        return false;
    }

    public function restore(User $user)
    {
        return $user->role->is_admin;
    }
}
