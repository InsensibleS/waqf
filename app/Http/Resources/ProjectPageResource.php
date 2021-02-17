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
            'comments' => ProjectCommentResource::collection($this->projectComments->where('answer_to', null)->sortByDesc('id'))
        ];
    }
}
