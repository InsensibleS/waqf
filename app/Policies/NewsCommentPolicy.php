<?php

namespace App\Policies;

use App\Models\User;

class NewsCommentPolicy extends DefaultPolicy
{
    public function update(User $user)
    {
        return false;
    }
}
