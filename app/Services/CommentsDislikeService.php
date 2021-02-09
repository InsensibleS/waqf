<?php

namespace App\Services;

use App\Models\NewsCommentDislike;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CommentsDislikeService
{
    protected $newsCommentDislike;

    public function __construct(NewsCommentDislike $newsCommentDislike)
    {
        $this->newsCommentDislike = $newsCommentDislike;
    }

    /**
     *
     * @param Request $request
     * @return NewsCommentDislike
     *
     */
    public function store($request)
    {
        $request['customer_id'] = Auth::id();

        return $this->newsCommentDislike->create($request->all());
    }

    /**
     *
     * @param Request $request
     * @return void
     *
     */
    public function deleteIfExists(Request $request)
    {
        $newsCommentDislike = NewsCommentDislike::where('customer_id', Auth::id())->where('news_comment_id', $request['news_comment_id'])->first();
        if ($newsCommentDislike) {
            $newsCommentDislike->delete();
        }
    }
}
