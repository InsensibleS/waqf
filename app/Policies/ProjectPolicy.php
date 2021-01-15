<?php


namespace App\Policies;


use App\Models\User;

class ProjectPolicy
{
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
        if (($user->role->titel ='Administrator') or ($user->role->titel='Moderator')){
         return true;
        }
        return false;
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
