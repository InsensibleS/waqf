<?php

namespace App\Services;

use App\Models\NewsComment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class NewsCommentService
{
    protected $newsComment;

    public function __construct(NewsComment $newsComment)
    {
        $this->newsComment = $newsComment;
    }

    /**
     *
     * @param Request $request
     * @return NewsComment
     *
     */
    public function store($request)
    {
        $request['customer_id'] = Auth::id();

        return $this->newsComment->create($request->all());
    }
}
