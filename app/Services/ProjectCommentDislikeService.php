<?php

namespace App\Services;

use App\Models\ProjectCommentDislike;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProjectCommentDislikeService
{
    /**
     *
     * @param Request $request
     * @return ProjectCommentDislike
     *
     */
    public function store($request)
    {
        $request['customer_id'] = Auth::id();

        return ProjectCommentDislike::create($request->all());
    }

    /**
     *
     * @param Request $request
     * @return void
     *
     */
    public function deleteIfExists(Request $request)
    {
        $projectCommentDislike = ProjectCommentDislike::where('customer_id', Auth::id())->where('project_comment_id', $request['project_comment_id'])->first();
        if ($projectCommentDislike) {
            $projectCommentDislike->delete();
        }
    }
}
