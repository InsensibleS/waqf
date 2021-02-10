<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class NewsPageResource extends JsonResource
{
    protected $news;
    protected $latestNews;

    public function __construct($newsPageData)
    {
        parent::__construct($newsPageData);
        $this->news = $newsPageData['news'];
        $this->latestNews = $newsPageData['latestNews'];
    }

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
            'news' => [
                'id' => $this->news->id,
                'title' => $this->news->title,
                'publication_date' => date('Y-m-d', strtotime($this->news->publication_date)),
                'link' => \config('custom.frontendUrlGetNews') . $this->news->link,
                'content' => $this->news->full_description,
                'hashtags' => HashtagResource::collection($this->news->newsHashtags),
                'countLikes' => $this->news->news_likes_count,
                'is_customer_liked' => count($this->news->newsLikes->where('customer_id', $customerId)) !== 0,
                'countComments' => $this->news->news_comments_count,
                'ban_comments' => $this->news->ban_comments,
                'comments' => CommentResource::collection($this->news->newsComments->where('answer_to', null)->sortByDesc('publication_date'))
            ],
            'latestNews' => NewsResource::collection($this->latestNews),
        ];
    }
}
