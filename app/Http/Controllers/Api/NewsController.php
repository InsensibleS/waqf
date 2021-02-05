<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\NewsRequest;
use App\Repositories\NewsPageRepository;
use App\Http\Resources\NewsPageResource;
use App\Repositories\AllNewsPageRepository;
use App\Http\Resources\AllNewsPageResource;
use App\Http\Requests\GetMoreNewsRequest;
use App\Http\Resources\MoreNewsResource;
use App\Http\Requests\GetAllNewsRequest;
use App\Services\NewsService;

class NewsController extends Controller
{
    protected $newsPageRepository;
    protected $allNewsPageRepository;
    protected $newsService;

    public function __construct(
        NewsPageRepository $newsPageRepository,
        AllNewsPageRepository $allNewsPageRepository,
        NewsService $newsService
    )
    {
        $this->newsPageRepository = $newsPageRepository;
        $this->allNewsPageRepository = $allNewsPageRepository;
        $this->newsService = $newsService;
    }

    public function getNews(NewsRequest $request)
    {

        return new NewsPageResource($this->newsPageRepository->getDataNewsPage($request->link));
    }

    public function getAllNews(GetAllNewsRequest $request)
    {
        return new AllNewsPageResource($this->allNewsPageRepository->getDataAllNewsPage());
    }

    public function getMoreNews(GetMoreNewsRequest $request)
    {
        return new MoreNewsResource($this->allNewsPageRepository->getDataMoreNews($request));
    }
}
