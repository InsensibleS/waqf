<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\LikeNewsSaveRequest;
use App\Services\NewsService;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Http\Requests\NewsRequest;
use App\Repositories\NewsPageRepository;
use App\Http\Resources\NewsPageResource;


class NewsController extends Controller
{
    protected $newsPageRepository;
    protected $newsService;

    public function __construct(NewsPageRepository $newsPageRepository)
    {
        $this->newsPageRepository = $newsPageRepository;
    }

    public function getNews(NewsRequest $request)
    {
        return new NewsPageResource($this->newsPageRepository->getDataNewsPage($request->link));
    }

    public function saveLike(LikeNewsSaveRequest $request){
        $this->newsService->store($request);
        return response()->json(['message'=> '201', 'Like store successfully!']);
    }
}
