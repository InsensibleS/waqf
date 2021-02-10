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
        $news = News::where('link', $link)
            ->withCount('newsLikes')
            ->withCount('newsComments')
            ->first();

        return [
            'news' => $news,
            'latestNews' => News::orderBy('publication_date', 'desc')
                ->when($news, function ($query) use ($news) {
                    return $query->whereNotIn('id', [$news->id]);
                })
                ->where('publication_date', '<', date('Y-m-d H:i'))
                ->limit(8)
                ->get(),
        ];
    }
}
