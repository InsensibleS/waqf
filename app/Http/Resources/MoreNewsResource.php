<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class MoreNewsResource extends JsonResource
{
    protected $news;
    protected $isThereStill;

    public function __construct($moreNewsPageData)
    {
        parent::__construct($moreNewsPageData);
        $this->news = $moreNewsPageData['news'];
        $this->isThereStill = $moreNewsPageData['isThereStill'];
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
            'news' => NewsFullResource::collection($this->news),
            'isThereStill' => $this->isThereStill
        ];
    }
}
