<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\NewsLikeDeleteRequest;
use App\Http\Requests\NewsLikeStoreRequest;
use App\Services\NewsLikeService;


class NewsLikeController extends Controller
{
    protected $newsLikeService;

    public function __construct(NewsLikeService $newsLikeService)
    {
        $this->newsLikeService = $newsLikeService;
    }

    public function addLikeToNews(NewsLikeStoreRequest $request)
    {
        $this->newsLikeService->store($request);

        return response()->json(['message'=> 'Like saving successfully!']);
    }

    public function deleteLikeToNews(NewsLikeDeleteRequest $request)
    {
        $this->newsLikeService->delete($request);

        return response()->json(['message'=>'Like deleted successfully!']);
    }
}
