<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class AllNewsPageResource extends JsonResource
{
    protected $firstNews;
    protected $secondNews;
    protected $remainder;
    protected $newsHashtags;
    protected $isThereStill;

    public function __construct($allNewsPageData)
    {
        parent::__construct($allNewsPageData);
        $this->firstNews = $allNewsPageData['firstNews'];
        $this->secondNews = $allNewsPageData['secondNews'];
        $this->remainder = $allNewsPageData['remainder'];
        $this->newsHashtags = $allNewsPageData['newsHashtags'];
        $this->isThereStill = $allNewsPageData['isThereStill'];
    }

    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
//        $customerId = auth('api')->user()->id ?? null;

        return [
            'firstNews' => new NewsFullResource($this->firstNews),
            'secondNews' => NewsFullResource::collection($this->secondNews),
            'remainder' => NewsFullResource::collection($this->remainder),
            'newsHashtags' => HashtagResource::collection($this->newsHashtags),
            'isThereStill' => $this->isThereStill
        ];
    }
}
