<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class ProjectPageResource extends JsonResource
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
            'id' => $this->id,
            'title' => $this->title,
            'publication_date' => date('Y-m-d', strtotime($this->publication_date)),
            'link' => \config('custom.frontendUrlGetProject') . $this->link,
            'content' => $this->description,
            'hashtags' => HashtagResource::collection($this->hashtags),
            'countComments' => $this->project_comments_count,
            'ban_comments' => $this->ban_comments,
            'image' => \config('custom.backendUrl') . \config('custom.storagePath') . $this->image1,
            'image2' => $this->image2 ? \config('custom.backendUrl') . \config('custom.storagePath') . $this->image2 : null,
            'image3' => $this->image3 ? \config('custom.backendUrl') . \config('custom.storagePath') . $this->image3 : null,
            'image4' => $this->image4 ? \config('custom.backendUrl') . \config('custom.storagePath') . $this->image4 : null,
            'image5' => $this->image5 ? \config('custom.backendUrl') . \config('custom.storagePath') . $this->image5 : null,
            'comments' => ProjectCommentResource::collection($this->projectComments->where('answer_to', null)->sortByDesc('id'))
        ];
    }
}
