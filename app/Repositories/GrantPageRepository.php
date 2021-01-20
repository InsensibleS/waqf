<?php

namespace App\Repositories;

use App\Models\Grant;
use App\Models\GrantStages;
use App\Models\Project;
use App\Models\News;

class GrantPageRepository
{
    /**
     * @return array
     */
    public function getGrantPagePage(): array
    {
        $grant =  Grant::where('grant_stage_id', '!=', 1)
            ->where('grant_stage_id', '!=', 8)
            ->first();

        $projects = $grant ? Project::where('grant_id', $grant->id)->get() : [];
        $grantStages = $grant ? GrantStages::all() : [];

        return [
            'grant' => $grant,
            'grantStages' => $grantStages,
            'projects' => $projects,
            'news' => News::orderBy('publication_date', 'desc')->get(),
        ];
    }
}
