<?php


namespace App\Policies;


use App\Models\User;
use Illuminate\Http\Request;
use Laravel\Nova\Fields\ID;
use Laravel\Nova\Fields\Text;

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
}
