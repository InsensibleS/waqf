<?php

namespace App\Repositories;

use App\Models\Grant;
use App\Models\GrantStage;
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

        $projects = $grant ? Project::where('grant_id', $grant->id)->where('status_id', 1)->get() : [];
        $grantStages = $grant ? GrantStage::all() : [];

        return [
            'grant' => $grant,
            'grantStages' => $grantStages,
            'projects' => $projects,
            'news' => News::orderBy('publication_date', 'desc')->get(),
        ];
    }
}
