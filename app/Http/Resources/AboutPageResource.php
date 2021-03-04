<?php


namespace App\Http\Resources;


use Illuminate\Http\Resources\Json\JsonResource;

class AboutPageResource extends JsonResource
{
    protected $aboutPageData;
    protected $teamMembersData;
    protected $partnersData;

    public function __construct($aboutPageData)
    {
        $this->aboutPageData = $aboutPageData['AboutPage'];
        $this->teamMembersData = $aboutPageData['TeamMember'];
        $this->partnersData = $aboutPageData['partnersData'];
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
                'title' => $this->aboutPageData->heading,
                'body' => $this->aboutPageData->description,
            ],
            'teamDate' => TeamMemberResource::collection($this->teamMembersData),
            'partnersData' => PartnerResource::collection($this->partnersData),
        ];
    }
}
