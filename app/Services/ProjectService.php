<?php

namespace App\Services;

use App\Models\Project;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProjectService
{
    protected $project;

    public function __construct(Project $project)
    {
        $this->project = $project;
    }

    /**
     *
     * @param Request $request
     * @return Project
     *
     */
    public function store($request)
    {
        $request['status_id'] = 2;
        $request['customer_id'] = Auth::id();
        $request['grant_stage_id'] = 2;
        $request['publication_date'] = date('Y-m-d');

        return $this->project->create($request->all());
    }

    /**
     *
     * @param int $id
     * @return void
     *
     */
    public function delete($id)
    {
        Project::destroy($id);
    }
}
