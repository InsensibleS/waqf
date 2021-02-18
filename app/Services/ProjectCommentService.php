<?php

namespace App\Services;

use App\Models\ProjectComment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProjectCommentService
{
    /**
     *
     * @param Request $request
     * @return ProjectComment
     *
     */
    public function store($request)
    {
        $request['customer_id'] = Auth::id();

        return ProjectComment::create($request->all());
    }
}
