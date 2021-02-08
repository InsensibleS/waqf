<?php

namespace App\Services;


use App\Models\NewsLike;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class NewsLikeService
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
     * @return NewsLike
     *
     */
    public function delete($newsLike){

        NewsLike::destroy($newsLike->id);
    }


    /**
     *
     * @param  Request  $request
     * @return NewsLike
     *
     */
    public function findLike($request)
    {

        return NewsLike::where('customer_id', Auth::id())->where('news_id', $request['news_id'])->first();
    }
}
