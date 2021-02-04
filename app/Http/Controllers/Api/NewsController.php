<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\NewsRequest;
use App\Repositories\NewsPageRepository;
use App\Http\Resources\NewsPageResource;
use App\Repositories\AllNewsPageRepository;
use App\Http\Resources\AllNewsPageResource;

class NewsController extends Controller
{
    protected $newsPageRepository;
    protected $allNewsPageRepository;

    public function __construct(NewsPageRepository $newsPageRepository, AllNewsPageRepository $allNewsPageRepository)
    {
        $this->newsPageRepository = $newsPageRepository;
        $this->allNewsPageRepository = $allNewsPageRepository;
    }

    public function getNews(NewsRequest $request)
    {
        return new NewsPageResource($this->newsPageRepository->getDataNewsPage($request->link));
    }

    public function getAllNews() {
        return new AllNewsPageResource($this->allNewsPageRepository->getDataAllNewsPage());
    }
}
