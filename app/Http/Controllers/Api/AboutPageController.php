<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\AboutPageResource;
use App\Repositories\AboutPageRepository;
use Illuminate\Http\Request;

class AboutPageController extends Controller
{
    protected $aboutPageRepository;

    public function __construct(AboutPageRepository $aboutPageRepository)
    {
        $this->aboutPageRepository = $aboutPageRepository;
    }

    public function getDataAboutPage()
    {
        return new AboutPageResource($this->aboutPageRepository->getDataMainPage());
    }
}
