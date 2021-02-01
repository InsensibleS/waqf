<?php

namespace App\Repositories;

use App\Models\News;

class NewsPageRepository
{
    /**
     * @param string $link
     * @return array
     */
    public function getDataNewsPage(string $link)
    {
        return [
            'news' => News::where('link', $link)->first(),
            'latestNews' => News::orderBy('publication_date', 'desc')->limit(8)->get(),
        ];
    }
}
