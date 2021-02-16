<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class ProjectResource extends JsonResource
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
        $customerId = auth('api')->user()->id ?? null;

        return [
            'id' => $this->projectData->id,
            'title' => $this->projectData->title,
            'status' => $this->projectData->status->title,
            'country' => $this->projectData->country->title,
            'description' => $this->projectData->description,
            'publication_date' => date('Y-m-d', strtotime($this->projectData->publication_date)),
            'link' => \config('custom.frontendUrlGetProject') . $this->projectData->link,
            'short_link' => $this->projectData->link,
            'countComments' => $this->projectData->project_comments_count,
            'image' => \config('custom.backendUrl') . \config('custom.storagePath') . $this->projectData->image1,
            'image2' => $this->projectData->image2 ? \config('custom.backendUrl') . \config('custom.storagePath') . $this->projectData->image2 : null,
            'image3' => $this->projectData->image3 ? \config('custom.backendUrl') . \config('custom.storagePath') . $this->projectData->image3 : null,
            'image4' => $this->projectData->image4 ? \config('custom.backendUrl') . \config('custom.storagePath') . $this->projectData->image4 : null,
            'image5' => $this->projectData->image5 ? \config('custom.backendUrl') . \config('custom.storagePath') . $this->projectData->image5 : null,
            'hashtags' => HashtagResource::collection($this->projectData->hashtags)
        ];
    }
}
