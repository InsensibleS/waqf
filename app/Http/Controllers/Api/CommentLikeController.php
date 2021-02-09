<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\CommentLikeDeleteRequest;
use App\Http\Requests\CommentLikeStoreRequest;
use App\Services\CommentsDislikeService;
use App\Services\CommentsLikeService;
use App\Services\CountCommentLikesDislikesService;

class CommentLikeController extends Controller
{
    protected $commentsLikeService;
    protected $commentsDislikeService;
    protected $countCommentLikesDislikesService;

    public function __construct(
        CommentsLikeService $commentsLikeService,
        CommentsDislikeService $commentsDislikeService,
        CountCommentLikesDislikesService $countCommentLikesDislikesService
    )
    {
        $this->commentsLikeService = $commentsLikeService;
        $this->commentsDislikeService = $commentsDislikeService;
        $this->countCommentLikesDislikesService = $countCommentLikesDislikesService;
    }

    public function addLikeToComment(CommentLikeStoreRequest $request)
    {
        $this->commentsLikeService->store($request);
        $this->commentsDislikeService->deleteIfExists($request);
        $countLikesAndDislikes = $this->countCommentLikesDislikesService->getCountLikesAndDislikes($request);

        return response()->json([
            'message'=> 'Like saving successfully!',
            'likes_and_dislikes' => $countLikesAndDislikes,
        ]);
    }

    public function deleteLikeToComment(CommentLikeDeleteRequest $request)
    {
        $this->commentsLikeService->deleteIfExists($request);
        $countLikesAndDislikes = $this->countCommentLikesDislikesService->getCountLikesAndDislikes($request);

        return response()->json([
            'message'=>'Like deleted successfully!',
            'likes_and_dislikes' => $countLikesAndDislikes,
        ]);
    }
}
