<?php


namespace App\Policies;


use App\Models\User;

class ProjectPolicy extends DefaultPolicy
{
    public function view(User $user)
    {
        if (($user->role->id='1') or ($user->role->id='2')){
         return true;
        }
        return false;
    }
}
