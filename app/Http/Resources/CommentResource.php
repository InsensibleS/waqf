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
        return [
            'is_active' => $this->is_active,
            'content' => $this->is_active ? $this->content : 'This comment was hidden',
            'userName' => $this->customer->name,
            'userAvatar' => \config('custom.storagePath') . $this->customer->avatar,
            'publication_date' => date('Y-m-d', strtotime($this->publication_date)),
            'likes' => count($this->newsCommentLikes),
            'dislikes' => count($this->newsCommentDislikes),
            'is_customer_liked' => count($this->newsCommentLikes->where('customer_id', Auth::id())) !== 0,
            'is_customer_disliked' => count($this->newsCommentDislikes->where('customer_id', Auth::id())) !== 0,
            'childrenComments' => CommentResource::collection($this->childrenComments)
        ];
    }
}
