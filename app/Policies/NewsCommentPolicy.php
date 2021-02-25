<?php

namespace App\Policies;

use App\Models\User;

class NewsCommentPolicy extends DefaultPolicy
{
    public function create(User $user)
    {
        return false;
    }

    public function update(User $user)
    {
        return false;
    }

    public function delete(User $user)
    {
        return false;
    }
}
