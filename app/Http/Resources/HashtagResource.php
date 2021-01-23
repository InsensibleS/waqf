<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class HashtagResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return string
     */
    public function toArray($request)
    {
        return '#' . $this->title;
    }
}
