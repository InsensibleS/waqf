<?php


namespace App\Policies;


use App\Models\User;

class ProjectVotePolicy extends DefaultPolicy
{
    public function delete(User $user)
    {
        return false;
    }

    public function update(User $user)
    {
        return false;
    }

    public function create(User $user)
    {
        return false;
    }
}
