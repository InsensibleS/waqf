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

    /**
     *
     * @param  Request  $request
     * @return NewsLike
     *
     */
    public function delete($news_id)
    {
        NewsLike::destroy($news_id);
    }
}
