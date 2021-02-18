<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\CommentToProjectStoreRequest;
use App\Services\ProjectCommentService;
use Throwable;

class ProjectCommentController extends Controller
{
    protected $projectCommentService;

    public function __construct(ProjectCommentService $projectCommentService)
    {
        $this->projectCommentService = $projectCommentService;
    }

    public function addCommentToProject(CommentToProjectStoreRequest $request)
    {
        try {
            $comment = $this->projectCommentService->store($request);
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
