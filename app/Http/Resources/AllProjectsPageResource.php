<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class AllProjectsPageResource extends JsonResource
{
    protected $projects;
    protected $projectHashtags;
    protected $numberOfPages;

    public function __construct($allProjectsPageData)
    {
        parent::__construct($allProjectsPageData);
        $this->projects = $allProjectsPageData['projects'];
        $this->projectHashtags = $allProjectsPageData['projectHashtags'];
        $this->numberOfPages = $allProjectsPageData['numberOfPages'];
    }

    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'projects' => ProjectResource::collection($this->projects),
            'projectHashtags' => HashtagResource::collection($this->projectHashtags),
            'numberOfPages' => $this->numberOfPages,
        ];
    }
}
