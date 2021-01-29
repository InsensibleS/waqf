<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class NewsPageResource extends JsonResource
{
    protected $news;
    protected $latestNews;

    public function __construct($newsPageData)
    {
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
        return [
            'news' => [
                'id' => $this->news->id,
                'title' => $this->news->title,
                'publication_date' => date('Y-m-d', strtotime($this->news->publication_date)),
                'content' => $this->news->full_description,
                'hashtags' => HashtagResource::collection($this->news->newsHashtags),
                'countLikes' => count($this->news->newsLikes),
                'countComments' => count($this->news->newsComments),
                'levelOne' => $this->news->newsComments->where('answer_to', null)->first()->nestedСomments
            ],
            'latestNews' => NewsResource::collection($this->latestNews),
        ];
    }
}
