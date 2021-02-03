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
    }
    public function getNews(NewsRequest $request)
    {
        return new NewsPageResource($this->newsPageRepository->getDataNewsPage($request->link));
    }
}
