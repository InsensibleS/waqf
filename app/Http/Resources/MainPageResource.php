<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class MainPageResource extends JsonResource
{
    protected $mainPageData;
    protected $newsData;
    protected $partnersData;
    protected $projectData;

    public function __construct($mainPageData)
    {
        $this->mainPageData = $mainPageData['mainPageAttributes'];
        $this->newsData = $mainPageData['newsData'];
        $this->partnersData = $mainPageData['partnersData'];
        $this->projectData = $mainPageData['projectsData'];
    }

    /**
     * Transform the resource into an array.
     *
     * @param \Illuminate\Http\Request $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'headingData' => [
                'title' => $this->mainPageData->heading,
                'subtitle' => $this->mainPageData->description,
                'seo_title' => $this->mainPageData->seo_title,
                'seo_keywords' => $this->mainPageData->heading,
                'seo_description' => $this->mainPageData->seo_description,
            ],
            'newsData' => NewsResource::collection($this->newsData),
            'projectData' =>ProjectResource::collection($this->projectData),
            'partnersData' => PartnerResource::collection($this->partnersData),
            'footerData' => [
                'email' => $this->mainPageData->footer_email,
                'address' => $this->mainPageData->footer_address,
            ],
        ];
    }
}
