<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class ProjectCommentResource extends JsonResource
{
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
            'id' => $this->id,
            'is_active' => $this->is_active,
            'content' => $this->is_active ? $this->content : 'This comment was hidden',
            'userName' => $this->customer->name,
            'userAvatar' => \config('custom.backendUrl') . \config('custom.storagePath') . $this->customer->avatar,
            'publication_date' => date('Y-m-d', strtotime($this->publication_date)),
            'likes' => count($this->projectCommentLikes),
            'dislikes' => count($this->projectCommentDislikes),
            'is_customer_liked' => count($this->projectCommentLikes->where('customer_id', $customerId)) !== 0,
            'is_customer_disliked' => count($this->projectCommentDislikes->where('customer_id', $customerId)) !== 0,
            'childrenComments' => ProjectCommentResource::collection($this->childrenComments),
        ];
    }
}
