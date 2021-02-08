<?php


namespace App\Services;


use App\Models\NewsCommentDislike;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CommentsDislikeService
{
    protected  $newsCommentLikeService;

    public function __construct(NewsCommentDislike   $newsCommentDislikeService)
    {
        $this-> newsCommentLikeService =   $newsCommentDislikeService;
    }

    /**
     *
     * @param  Request  $request
     * @return NewsCommentDislike
     *
     */
    public function store($request)
    {
        $request['customer_id'] = Auth::id();

        return $this->newsCommentLikeService->create($request->all());
    }

    /**
     *
     * @return NewsCommentDislike
     *
     */
    public function delete($newsCommentDislikeService)
    {
        NewsCommentDislike::destroy($newsCommentDislikeService->id);
    }

    /**
     *
     * @param  Request  $request
     * @return NewsCommentDislike
     *
     */
    public function findDislike($request)
    {
        return NewsCommentDislike::where('customer_id', Auth::id())->where('news_comments_id', $request['news_comments_id'])->first();
    }
}
