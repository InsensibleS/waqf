<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;
use Illuminate\Support\Facades\Auth;

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
        $customerId = auth('api')->user()->id ?? null;

        return [
            'id' => $this->id,
            'is_active' => $this->is_active,
            'content' => $this->is_active ? $this->content : 'This comment has been blocked by site administration',
            'userName' => $this->customer->name,
            'userAvatar' => \config('custom.backendUrl') . \config('custom.storagePath') . $this->customer->avatar,
            'publication_date' => date('Y-m-d', strtotime($this->publication_date)),
            'likes' => count($this->newsCommentLikes),
            'dislikes' => count($this->newsCommentDislikes),
            'is_customer_liked' => count($this->newsCommentLikes->where('customer_id', $customerId)) !== 0,
            'is_customer_disliked' => count($this->newsCommentDislikes->where('customer_id', $customerId)) !== 0,
            'childrenComments' => CommentResource::collection($this->childrenComments),
        ];
    }
}
