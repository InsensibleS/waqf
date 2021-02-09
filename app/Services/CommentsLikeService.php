<?php

namespace App\Services;

use App\Models\NewsCommentLike;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CommentsLikeService
{
    protected $newsCommentLike;

    public function __construct(NewsCommentLike $newsCommentLike)
    {
        $this->newsCommentLike = $newsCommentLike;
    }

    /**
     *
     * @param Request $request
     * @return NewsCommentLike
     *
     */
    public function store($request)
    {
        $request['customer_id'] = Auth::id();

        return $this->newsCommentLike->create($request->all());
    }

    /**
     *
     * @param Request $request
     * @return void
     *
     */
    public function deleteIfExists(Request $request)
    {
        $newsCommentLike = NewsCommentLike::where('customer_id', Auth::id())->where('news_comment_id', $request['news_comment_id'])->first();
        if($newsCommentLike) {
            $newsCommentLike->delete();
        }
    }
}
