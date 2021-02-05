<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class NewsFullResource extends JsonResource
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
            'title' => $this->title,
            'description' => $this->description,
            'img' => \config('custom.backendUrl') . \config('custom.storagePath') . $this->image,
            'publication_date' => date('Y-m-d', strtotime($this->publication_date)),
            'link' => \config('custom.frontendUrlGetNews') . $this->link,
            'short_link' => $this->link,
            'countLikes' => $this->news_likes_count,
            'is_customer_liked' => count($this->newsLikes->where('customer_id', $customerId)) !== 0,
            'countComments' => $this->news_comments_count,
            'hashtags' => HashtagResource::collection($this->newsHashtags),
        ];
    }
}
