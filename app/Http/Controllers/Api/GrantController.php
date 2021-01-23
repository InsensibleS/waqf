<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Repositories\GrantPageRepository;
use App\Http\Resources\GrantPageResource;

class GrantController extends Controller
{
    protected $grantPageRepository;

    public function __construct(GrantPageRepository $grantPageRepository)
    {
        $this->grantPageRepository = $grantPageRepository;
    }

    public function getCurrentGrantWithProjects() {
        return response()->json(new GrantPageResource($this->grantPageRepository->getGrantPagePage()));
    }
}
