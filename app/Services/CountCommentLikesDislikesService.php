<?php

namespace App\Services;

use App\Models\NewsComment;
use Illuminate\Http\Request;

class CountCommentLikesDislikesService
{
    protected $newsComment;

    public function __construct(NewsComment $newsComment)
    {
        $this->newsComment = $newsComment;
    }

    /**
     *
     * @param Request $request
     * @return array
     *
     */
    public function getCountLikesAndDislikes(Request $request): array
    {
        $newsComment = $this->newsComment->find($request->news_comment_id);

        return [
            'count_likes' => $newsComment->newsCommentLikes->count(),
            'count_dislikes' => $newsComment->newsCommentDislikes->count(),
        ];
    }
}
