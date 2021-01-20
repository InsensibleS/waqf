<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class GrantsAndProjectsForProfileResource extends JsonResource
{
    protected $grantsAndProjectsForProfileData;

    public function __construct($grantsAndProjectsForProfileData)
    {
        $this->grantsAndProjectsForProfileData = $grantsAndProjectsForProfileData;
    }

    /**
     * Transform the resource into an array.
     *
     * @param \Illuminate\Http\Request $request
     * @return array
     */
    public function toArray($request)
    {
        $grantStage = ($this->grantsAndProjectsForProfileData->grant_stage_id === 8) ? "archive" : "current";
        $addStringForTitle = ($this->grantsAndProjectsForProfileData->grant_stage_id === 8) ? " (Archive)" : "";

        return [
            'id' => $this->grantsAndProjectsForProfileData->id,
            'title' => $this->grantsAndProjectsForProfileData->title . $addStringForTitle,
            'stage' => $grantStage,
            'projects' => ProjectsResource::collection($this->grantsAndProjectsForProfileData->customerProjects)
        ];
    }
}
