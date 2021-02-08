<?php

namespace App\Services;


use App\Models\NewsLike;

class NewsService
{
    protected $newsLike;

    public function __construct(NewsLike $newsLike)
    {
        $this->newsLike = $newsLike;
    }

    public function rememberMainNews($firstNews, $secondNews) {
        $arrayMainNewsId = [];
        if ($firstNews)  {
            array_push($arrayMainNewsId, $firstNews->id);
        }

        foreach ($secondNews as $news) {
            array_push($arrayMainNewsId, $news->id);
        }

        session()->put('arrayMainNewsId', $arrayMainNewsId);
    }

    public function rememberSearchAndHashtag($request)
    {
        session()->put('searchWord', $request->search_word);
        session()->put('hashtagId', $request->hashtag_id);
    }
}
