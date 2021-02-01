<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class CommentResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'content' => $this->content,
            'userName' => $this->customer->name,
            'userAvatar' => \config('custom.storagePath') . $this->customer->avatar,
            'publication_date' => date('Y-m-d', strtotime($this->publication_date)),
            'innerComments' => CommentResource::collection($this->nestedСomments)
        ];
    }
}
