<?php

namespace App\Repositories;

use App\Models\Grant;
use Illuminate\Database\Eloquent\Collection;

class GrantRepository
{
    /**
     * @param int $id
     * @return Collection|null
     */
    public function getCurrentAndFutureGrants($id)
    {
        return Grant::where('end_date', '>=', date('Y-m-d'))
            ->where('id', '!=', $id)
            ->get();
    }
}
