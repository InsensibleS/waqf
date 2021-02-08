<?php


namespace App\Services;


use App\Models\NewsCommentLike;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CommentsLikeService
{
    protected  $newsCommentLikeService;

    public function __construct(NewsCommentLike   $newsCommentLikeService)
    {
        $this-> newsCommentLikeService =   $newsCommentLikeService;
    }

    /**
     *
     * @param  Request  $request
     * @return NewsCommentLike
     *
     */
    public function store($request)
    {
        $request['customer_id'] = Auth::id();

        return $this->newsCommentLikeService->create($request->all());
    }

    /**
     *
     * @return NewsCommentLike
     *
     */
    public function delete($newsCommentLikeService)
    {
        NewsCommentLike::destroy($newsCommentLikeService->id);
    }

    /**
     *
     * @param  Request  $request
     * @return NewsCommentLike
     *
     */
    public function findLike($request)
    {
        return NewsCommentLike::where('customer_id', Auth::id())->where('news_comments_id', $request['news_comments_id'])->first();
    }
}
