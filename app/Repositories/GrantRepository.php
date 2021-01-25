<?php

namespace App\Repositories;

use App\Models\Grant;
use Illuminate\Database\Eloquent\Collection;

class GrantRepository
{
    /**
     * @return Collection|null
     */
    public function getFutureGrants()
    {
        return Grant::where('start_date', '>', date('Y-m-d'))->get();
    }
}
