<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class NewsResource extends JsonResource
{
    protected $newsData;

    public function __construct($newsData)
    {
        $this->newsData = $newsData;
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
            'title' => $this->newsData->title,
            'description' => $this->newsData->description,
            'img' => \config('custom.backendUrl') . \config('custom.storagePath') . $this->newsData->image,
            'publication_date' => date('Y-m-d', strtotime($this->newsData->publication_date)),
        ];
    }
}
