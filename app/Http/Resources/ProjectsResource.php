<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class ProjectsResource extends JsonResource
{
    protected $projectData;

    public function __construct($projectData)
    {
        $this->projectData = $projectData;
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
            'id' => $this->projectData->id,
            'title' => $this->projectData->title,
            'status' => $this->projectData->status->title,
            'country' => $this->projectData->country->title,
            'description' => $this->projectData->description,
            'publication_date' => date('Y-m-d', strtotime($this->projectData->publication_date)),
            'image' => \config('custom.backendUrl') . \config('custom.storagePath') . $this->projectData->image1,
            'hashtags' => HashtagResource::collection($this->projectData->hashtags)
        ];
    }
}
