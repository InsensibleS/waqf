<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\LikeNewsDeleteRequest;
use App\Http\Requests\LikeNewsSaveRequest;
use App\Services\NewsLikeService;


class NewsLikeController extends Controller
{
    protected $newsLikeService;

    public function __construct(NewsLikeService $newsLikeService)
    {
        $this->newsLikeService = $newsLikeService;
    }

    public function addLikeToNews(LikeNewsSaveRequest $request)
    {
        $this->newsLikeService->store($request);
        
        return response()->json(['message'=> 'Like saving successfully!']);
    }

    public function deleteLikeToNews(LikeNewsDeleteRequest $request)
    {
        $like = $this->newsLikeService->findLike($request);
        $this->newsLikeService->delete($like);

        return response()->json(['message'=>'Like deleted successfully!']);
    }
}
