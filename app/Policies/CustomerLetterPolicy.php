<?php


namespace App\Policies;


use App\Models\User;

class CustomerLetterPolicy extends DefaultPolicy
{
   public function create(User $user)
    {
        return false;
    }

    public function update(User $user)
    {
        return false;
    }
}
