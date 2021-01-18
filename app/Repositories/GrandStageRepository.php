<?php

namespace App\Repositories;

use App\Models\GrantStages;

class GrandStageRepository
{
    /**
     * @return array
     */
    public function getAllGrandStages()
    {
        return GrantStages::all();
    }
}
