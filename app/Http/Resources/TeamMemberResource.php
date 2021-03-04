<?php


namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class TeamMemberResource extends JsonResource
{
    protected $teamData;

    public function __construct($teamData)
    {
        $this->teamData = $teamData;
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
            'name' => $this->teamData->name,
            'description' => $this->teamData->description,
            'photo' => \config('custom.backendUrl') . \config('custom.storagePath') . $this->teamData->photo
        ];
    }
}
