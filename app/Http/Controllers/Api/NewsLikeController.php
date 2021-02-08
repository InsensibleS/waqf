<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\LikeNewsDeleteRequest;
use App\Http\Requests\LikeNewsSaveRequest;
use App\Services\NewsLikeService;


class NewsLikeController extends Controller
{
    protected $newsService;

    public function __construct(NewsLikeService $newsService)
    {
        $this->newsService = $newsService;
    }

    public function addLikeToNews(LikeNewsSaveRequest $request)
    {
        $this->newsService->store($request);
        return response()->json(['message'=> 'Like saving successfully!']);
    }

    public function deleteLikeToNews(LikeNewsDeleteRequest $request)
    {
        $dislike = $this->newsService->serchData($request);
        $this->newsService->delete($dislike);
        return response()->json(['message'=>'Like deleted successfully!']);
    }
}
