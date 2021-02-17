<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\ProjectCommentDislikeDeleteRequest;
use App\Http\Requests\ProjectCommentDislikeStoreRequest;
use App\Services\CountProjectCommentLikesDislikesService;
use App\Services\ProjectCommentDislikeService;
use App\Services\ProjectCommentLikeService;

class ProjectCommentDislikeController extends Controller
{
    protected $projectCommentLikeService;
    protected $projectCommentDislikeService;
    protected $countProjectCommentLikesDislikesService;

    public function __construct(
        ProjectCommentLikeService $projectCommentLikeService,
        ProjectCommentDislikeService $projectCommentDislikeService,
        CountProjectCommentLikesDislikesService $countProjectCommentLikesDislikesService
    )
    {
        $this->projectCommentLikeService = $projectCommentLikeService;
        $this->projectCommentDislikeService = $projectCommentDislikeService;
        $this->countProjectCommentLikesDislikesService = $countProjectCommentLikesDislikesService;
    }

    public function addDislikeToComment(ProjectCommentDislikeStoreRequest $request)
    {
        $this->projectCommentDislikeService->store($request);
        $this->projectCommentLikeService->deleteIfExists($request);
        $countLikesAndDislikes = $this->countProjectCommentLikesDislikesService->getCountLikesAndDislikes($request);

        return response()->json([
            'message'=> 'Dislike saving successfully!',
            'likes_and_dislikes' => $countLikesAndDislikes,
        ]);
    }

    public function deleteDislikeFromComment(ProjectCommentDislikeDeleteRequest $request)
    {
        $this->projectCommentDislikeService->deleteIfExists($request);
        $countLikesAndDislikes = $this->countProjectCommentLikesDislikesService->getCountLikesAndDislikes($request);

        return response()->json([
            'message'=>'Dislike deleted successfully!',
            'likes_and_dislikes' => $countLikesAndDislikes,
        ]);
    }
}
