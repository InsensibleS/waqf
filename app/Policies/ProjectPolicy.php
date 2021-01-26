<?php


namespace App\Policies;


use App\Models\User;
use App\Models\Project;

class ProjectPolicy
{
    public function view(User $user)
    {
        if (($user->role->id === 1) ||  ($user->role->id === 2)) {
            return true;
        }
        return false;
    }

    public function delete(User $user)
    {
        return false;
    }

    public function update(User $user)
    {
        return false;
    }

    public function attachHashtag(User $user, Project $project)
    {
        return false;
    }

    public function detachHashtag(User $user, Project $project)
    {
        return false;
    }

    public function attachAnyHashtag(User $user, Project $project)
    {
        return false;
    }
}
