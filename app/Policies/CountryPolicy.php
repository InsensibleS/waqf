<?php

namespace App\Policies;

use App\Models\User;

class CountryPolicy extends DefaultPolicy
{
    public function delete(User $user)
    {
        return false;
    }
}
