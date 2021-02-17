<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\ProjectCommentLikeDeleteRequest;
use App\Http\Requests\ProjectCommentLikeStoreRequest;
use App\Services\ProjectCommentDislikeService;
use App\Services\ProjectCommentLikeService;
use App\Services\CountProjectCommentLikesDislikesService;

class ProjectCommentLikeController extends Controller
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

    public function addLikeToComment(ProjectCommentLikeStoreRequest $request)
    {
        $this->projectCommentLikeService->store($request);
        $this->projectCommentDislikeService->deleteIfExists($request);
        $countLikesAndDislikes = $this->countProjectCommentLikesDislikesService->getCountLikesAndDislikes($request);

        return response()->json([
            'message'=> 'Like saving successfully!',
            'likes_and_dislikes' => $countLikesAndDislikes,
        ]);
    }

    public function deleteLikeFromComment(ProjectCommentLikeDeleteRequest $request)
    {
        $this->projectCommentLikeService->deleteIfExists($request);
        $countLikesAndDislikes = $this->countProjectCommentLikesDislikesService->getCountLikesAndDislikes($request);

        return response()->json([
            'message'=>'Like deleted successfully!',
            'likes_and_dislikes' => $countLikesAndDislikes,
        ]);
    }
}
