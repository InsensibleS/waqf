<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Services\NewsCommentService;
use App\Http\Requests\CommentToNewsStoreRequest;
use Throwable;

class NewsCommentController extends Controller
{
    protected $newsCommentService;

    public function __construct(NewsCommentService $newsCommentService)
    {
        $this->newsCommentService = $newsCommentService;
    }

    public function addCommentToNews(CommentToNewsStoreRequest $request)
    {
        try {
            $comment = $this->newsCommentService->store($request);
            $response = $comment->id;
            $message = 'Comment saved successfully.';
        } catch (Throwable $exception) {
            $response = null;
            $message = 'There was an error while saving the comment.';
            report($exception);
        }

        return response()->json(['message' => $message, 'response' => $response]);
    }
}
