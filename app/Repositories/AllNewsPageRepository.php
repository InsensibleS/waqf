<?php

namespace App\Repositories;

use App\Models\News;
use App\Models\NewsHashtag;

class AllNewsPageRepository
{
    /**
     * @return array
     */
    public function getDataAllNewsPage()
    {
        return [
            'news' => News::all(),
            'newsHashtags' => NewsHashtag::withCount('news')
                ->orderBy('news_count', 'desc')
                ->limit(5)
                ->get()
        ];
    }
}
