<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\GrantsAndProjectsForProfileResource;
use App\Repositories\GrantsAndProjectsForProfileRepository;

class ProjectController extends Controller
{
    protected $grantsAndProjectsForProfileRepository;

    public function __construct(GrantsAndProjectsForProfileRepository $grantsAndProjectsForProfileRepository)
    {
        $this->grantsAndProjectsForProfileRepository = $grantsAndProjectsForProfileRepository;
    }

    public function getProjectsForProfile()
    {
        return response()->json(GrantsAndProjectsForProfileResource::collection($this->grantsAndProjectsForProfileRepository->getGrantsAndProjectsForProfile()));
    }
}
