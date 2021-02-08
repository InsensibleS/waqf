<?php

namespace App\Repositories;

use App\Models\News;
use App\Models\NewsHashtag;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Support\Collection;
use App\Services\NewsService;
use Illuminate\Http\Request;

class AllNewsPageRepository
{
    private const FOR_PAGE = 12;

    protected $newsService;

    public function __construct(NewsService $newsService)
    {
        $this->newsService = $newsService;
    }

    /**
     * @param Collection|null $allNews
     * @return News|null
     */
    private function getMainNews($allNews)
    {
        $mainNews = null;
        if($allNews) {
            $mainNews = $allNews->where('is_main', true) ->first();
        }

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
    private function getSecondNews($allNews, $firstNews, $hashtagId, $searchWord)
    {
        $secondNews = News::where('is_second', 1)
            ->when($hashtagId, function ($query, $hashtagId) {
                return $query->whereHas('newsHashtags', function (Builder $q) use ($hashtagId) {
                    $q->where('hashtag_id', $hashtagId);
                });
            })
            ->when($searchWord, function ($query) use ($searchWord) {
                return $query->whereRaw("MATCH(title,description) AGAINST(? IN BOOLEAN MODE)", array($searchWord));
            })
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


    /**
     * @return array
     */
    public function getDataAllNewsPage(Request $request)
    {
        $hashtagId = $request->hashtag_id;
        $searchWord = $request->search_word;
        $searchWord = $searchWord ? '*' . $searchWord . '*' : null;

        $allNews = News::with('newsHashtags')->orderBy('publication_date', 'desc')
            ->when($hashtagId, function ($query, $hashtagId) {
                return $query->whereHas('newsHashtags', function (Builder $q) use ($hashtagId) {
                    $q->where('hashtag_id', $hashtagId);
                });
            })
            ->when($searchWord, function ($query) use ($searchWord) {
                return $query->whereRaw("MATCH(title,description) AGAINST(? IN BOOLEAN MODE)", array($searchWord));
            })
            ->withCount('newsLikes')
            ->withCount('newsComments')
            ->get();

        dd($allNews, $searchWord);

        $firstNews = [];
        $secondNews = [];
        $remainder = [];
        $isThereStill = false;

        if (count($allNews) !== 0) {
            $firstNews = $this->getMainNews($allNews);
            $secondNews = $this->getSecondNews($allNews, $firstNews, $request->hashtag_id, $searchWord);
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

    public function getDataMoreNews(Request $request)
    {
        $arrayMainNewsId = $request->arrayMainNewsId;
        $page = $request->page;
        $hashtagId = $request->hashtag_id;

        $remainingNews = News::orderBy('publication_date', 'desc')
            ->when($hashtagId, function ($query, $hashtagId) {
                return $query->whereHas('newsHashtags', function (Builder $q) use ($hashtagId) {
                    $q->where('hashtag_id', $hashtagId);
                });
            })
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
