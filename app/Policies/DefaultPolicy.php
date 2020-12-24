<?php

namespace App\Policies;

use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class DefaultPolicy
{
    use HandlesAuthorization;

    /**
     * Create a new policy instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

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

    public function update(User $user)
    {
        return $user->role->is_admin;
    }

    public function delete(User $user)
    {
        return $user->role->is_admin;
    }

    public function restore(User $user)
    {
        return $user->role->is_admin;
    }
}
