<?php

namespace App\Services;

use App\Models\ProjectComment;
use Illuminate\Http\Request;

class CountProjectCommentLikesDislikesService
{
    /**
     *
     * @param Request $request
     * @return array
     *
     */
    public function getCountLikesAndDislikes(Request $request): array
    {
        $projectComment = ProjectComment::find($request->project_comment_id);

        return [
            'count_likes' => $projectComment->projectCommentLikes->count(),
            'count_dislikes' => $projectComment->projectCommentDislikes->count(),
        ];
    }
}
