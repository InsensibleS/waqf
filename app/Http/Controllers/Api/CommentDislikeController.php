<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\CommentDislikeStoreRequest;
use App\Http\Requests\CommentDislikeDeleteRequest;
use App\Services\CommentsDislikeService;
use App\Services\CommentsLikeService;
use App\Services\CountCommentLikesDislikesService;

class CommentDislikeController extends Controller
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

    public function addDislikeToComment(CommentDislikeStoreRequest $request)
    {
        $this->commentsDislikeService->store($request);
        $this->commentsLikeService->deleteIfExists($request);
        $countLikesAndDislikes = $this->countCommentLikesDislikesService->getCountLikesAndDislikes($request);

        return response()->json([
            'message'=> 'Dislike saving successfully!',
            'likes_and_dislikes' => $countLikesAndDislikes,
        ]);
    }

    public function deleteDislikeToComment(CommentDislikeDeleteRequest $request)
    {
        $this->commentsDislikeService->deleteIfExists($request);
        $countLikesAndDislikes = $this->countCommentLikesDislikesService->getCountLikesAndDislikes($request);

        return response()->json([
            'message'=>'Dislike deleted successfully!',
            'likes_and_dislikes' => $countLikesAndDislikes,
        ]);
    }
}
