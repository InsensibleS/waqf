<?php


namespace App\Policies;


use App\Models\User;
use Illuminate\Http\Request;
use Laravel\Nova\Fields\ID;
use Laravel\Nova\Fields\Text;

class ProjectPolicy extends DefaultPolicy
{
    public function view(User $user)
    {
        if (($user->role->id=='1') or ($user->role->id=='2')){
         return true;
        }
        return false;
    }
}
