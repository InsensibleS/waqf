<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Models\News;
use App\Http\Requests\NewsRequest;
use App\Repositories\NewsPageRepository;
use App\Http\Resources\NewsPageResource;


class NewsController extends Controller
{
    protected $newsPageRepository;

    public function __construct(NewsPageRepository $newsPageRepository)
    {
        $this->newsPageRepository = $newsPageRepository;
    }

    public function getNews(NewsRequest $request)
    {
        return new NewsPageResource($this->newsPageRepository->getDataNewsPage($request->link));
    }
}
