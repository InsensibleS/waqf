<?php

namespace App\Repositories;

use App\Models\News;
use App\Models\NewsHashtag;
use Illuminate\Support\Collection;
use App\Services\NewsService;

class AllNewsPageRepository
{
    private const FOR_PAGE = 12;

    protected $newsService;

    /**
     * @param Collection|null $allNews
     * @return News|null
     */
    private function getMainNews($allNews) {
        $mainNews = $allNews->where('is_main', true)->first();
        if ($mainNews === null) {
            $mainNews = $allNews->first();
        }

        return $mainNews;
    }

    /**
     * @param Collection|null $allNews
     * @param News|null $firstNews
     * @return Collection|null
     */
    private function getSecondNews($allNews, $firstNews) {
        $secondNews = News::where('is_second', 1)
            ->whereNotIn('id', [$firstNews->id])
            ->withCount('newsLikes')
            ->withCount('newsComments')
            ->orderBy('publication_date', 'desc')
            ->limit(3)
            ->get();

        while (count($secondNews) < 3) {
            $addNews = $allNews->diff($secondNews)->whereNotIn('id', [$firstNews->id])->first();
            if($addNews === null) {
                break;
            }
            $secondNews->push($addNews);
        }

        return $secondNews;
    }

    public function __construct(NewsService $newsService)
    {
        $this->newsService = $newsService;
    }

    /**
     * @return array
     */
    public function getDataAllNewsPage()
    {
        $allNews = News::orderBy('publication_date', 'desc')
            ->withCount('newsLikes')
            ->withCount('newsComments')
            ->get();
        $firstNews = [];
        $secondNews = [];
        $remainder = [];
        $isThereStill = null;

        if (count($allNews) !== 0) {
            $firstNews = $this->getMainNews($allNews);
            $secondNews = $this->getSecondNews($allNews, $firstNews);
            $remainder = $allNews->diff($secondNews)->whereNotIn('id', [$firstNews->id])->take(self::FOR_PAGE);
            $isThereStill = count($allNews->diff($secondNews, $remainder)->whereNotIn('id', [$firstNews->id])->forPage(2, self::FOR_PAGE)) > 0;
        }

        $this->newsService->rememberMainNews($firstNews, $secondNews);

        return [
            'firstNews' => $firstNews,
            'secondNews' => $secondNews,
            'remainder' => $remainder,
            'isThereStill' => $isThereStill,
            'newsHashtags' => NewsHashtag::withCount('news')
                ->orderBy('news_count', 'desc')
                ->limit(5)
                ->get()
        ];
    }

    public function getDataMoreNews($page)
    {
        $arrayMainNewsId =  session()->get('arrayMainNewsId');

        $remainingNews = News::orderBy('publication_date', 'desc')
            ->withCount('newsLikes')
            ->withCount('newsComments')
            ->when($arrayMainNewsId, function ($query, $arrayMainNewsId) {
                return $query->whereNotIn('id', $arrayMainNewsId);
            })
            ->get();

        return [
            'news' => $remainingNews->forPage($page, self::FOR_PAGE),
            'isThereStill' => count($remainingNews->forPage($page + 1, self::FOR_PAGE)) > 0
        ];
    }
}
