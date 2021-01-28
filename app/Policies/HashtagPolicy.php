<?php

namespace App\Policies;

use App\Models\Hashtag;
use App\Models\User;

class HashtagPolicy extends DefaultPolicy
{
    public function attachProject(User $user, Hashtag $hashtag)
    {
        return false;
    }

    public function detachProject(User $user, Hashtag $hashtag)
    {
        return false;
    }

    public function attachAnyProject(User $user, Hashtag $hashtag)
    {
        return false;
    }
}
