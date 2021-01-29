<?php

namespace App\Policies;

use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class NewsHashtagPolicy
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
        if (($user->role->id === 1) ||  ($user->role->id === 2)) {
            return true;
        }
        return false;
    }

    public function view(User $user)
    {
        if (($user->role->id === 1) ||  ($user->role->id === 2)) {
            return true;
        }
        return false;
    }

    public function create(User $user)
    {
        if (($user->role->id === 1) ||  ($user->role->id === 2)) {
            return true;
        }
        return false;
    }

    public function update(User $user)
    {
        if (($user->role->id === 1) ||  ($user->role->id === 2)) {
            return true;
        }
        return false;
    }

    public function delete(User $user)
    {
        if (($user->role->id === 1) ||  ($user->role->id === 2)) {
            return true;
        }
        return false;
    }

    public function restore(User $user)
    {
        if (($user->role->id === 1) ||  ($user->role->id === 2)) {
            return true;
        }
        return false;
    }
}
