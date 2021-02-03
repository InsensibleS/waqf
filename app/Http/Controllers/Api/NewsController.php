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

    public function __construct(NewsPageRepository $newsPageRepository, NewsService $newsService)
    {
        $this->newsPageRepository = $newsPageRepository;
        $this->newsService = $newsService;
    }
    public function getNews(NewsRequest $request)
    {
        return new NewsPageResource($this->newsPageRepository->getDataNewsPage($request->link));
    }

    public function addLikeToNews(LikeNewsSaveRequest $request){
        $this->newsService->store($request);
        return response()->json(['message'=> 'я всёLike saving successfully!']);
    }
}
