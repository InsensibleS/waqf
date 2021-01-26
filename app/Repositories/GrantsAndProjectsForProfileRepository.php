<?php

namespace App\Repositories;

use App\Models\Grant;

class GrantsAndProjectsForProfileRepository
{
    public function getGrantsAndProjectsForProfile()
    {
        return Grant::has('customerProjects')
            ->orWhere('grant_stage_id', 2)
            ->orderBy('start_date', 'desc')
            ->get();
    }
}
