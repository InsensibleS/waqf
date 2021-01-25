<?php

namespace App\Repositories;

use App\Models\Project;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Support\Facades\Auth;

class ProjectRepository
{
    /**
     *
     * @param  int  $grantId
     * @return Collection|null
     *
     */
    public function getUserProjectsInGrant($grantId)
    {
        return Project::where([
            'customer_id' => Auth::id(),
            'grant_id' => $grantId
        ])->get();
    }
}
