<?php

namespace App\Services;


use App\Models\NewsLike;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class NewsService
{
    protected $newsLike;

    public function __construct(NewsLike $newsLike)
    {
        $this->newsLike = $newsLike;
    }

    /**
     *
     * @param  Request  $request
     * @return NewsLike
     *
     */
    public function store($request)
    {
        $request['customer_id'] = Auth::id();

        return $this->newsLike->create($request->all());
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
}
