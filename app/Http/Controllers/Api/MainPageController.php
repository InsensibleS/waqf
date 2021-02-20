<?php

namespace App\Http\Controllers\Api;

use App\Helpers\GrantStageHelper;
use App\Http\Controllers\Controller;
use App\Http\Resources\MainPageResource;
use App\Repositories\MainPageRepository;
use App\Services\GrantStageProcessingService;

class MainPageController extends Controller
{
    protected $mainPageRepository;

    public function __construct(MainPageRepository $mainPageRepository)
    {
        $this->mainPageRepository = $mainPageRepository;
    }

    public function getDataMainPage()
    {
        return new MainPageResource($this->mainPageRepository->getDataMainPage());
    }

    public function test()
    {
        $service = new GrantStageProcessingService;
        $service->changeGrantsStages(new GrantStageHelper());
    }
}
