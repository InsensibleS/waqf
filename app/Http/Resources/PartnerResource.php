<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class PartnerResource extends JsonResource
{
    protected $partnersData;

    public function __construct($partnersData)
    {
        $this->partnersData = $partnersData;
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
            'title' => $this->partnersData->title,
            'description' => $this->partnersData->description,
            'img' => \config('custom.backendUrl') . \config('custom.storagePath') . $this->partnersData->image
        ];
    }
}
