<?php

namespace App\Repositories;

use App\Models\News;
use App\Models\NewsHashtag;
use Illuminate\Support\Collection;

class AllNewsPageRepository
{
    /**
     * @return array
     */
    public function getDataAllNewsPage()
    {
        $allNews = News::orderBy('publication_date', 'desc')->get();
        $firstNews = [];
        $secondNews = [];
        $remainder = [];

        if (count($allNews) !== 0) {
            $firstNews = $this->getMainNews($allNews);
            $secondNews = $this->getSecondNews($allNews, $firstNews);
            $remainder = array_values($allNews->diff($secondNews)->whereNotIn('id', [$firstNews->id])->take(12)->toArray());
        }

        return [
            'firstNews' => $firstNews,
            'secondNews' => $secondNews,
            'remainder' => $remainder,
            'newsHashtags' => NewsHashtag::withCount('news')
                ->orderBy('news_count', 'desc')
                ->limit(5)
                ->get()
        ];
    }

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
}
