<?php

namespace App\Services;

use App\Models\ProjectCommentLike;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProjectCommentLikeService
{
    /**
     *
     * @param Request $request
     * @return ProjectCommentLike
     *
     */
    public function store($request)
    {
        $request['customer_id'] = Auth::id();

        return ProjectCommentLike::create($request->all());
    }

    /**
     *
     * @param Request $request
     * @return void
     *
     */
    public function deleteIfExists(Request $request)
    {
        $projectCommentLike = ProjectCommentLike::where('customer_id', Auth::id())->where('project_comment_id', $request['project_comment_id'])->first();
        if($projectCommentLike) {
            $projectCommentLike->delete();
        }
    }
}
