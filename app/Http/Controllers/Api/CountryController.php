<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\CountryResource;
use App\Repositories\CountryRepository;


class CountryController extends Controller
{
    protected $CountryRepository;

    public function __construct(CountryRepository $countryRepository)
    {
        $this->CountryRepository = $countryRepository;
    }
    public function getDataCountry()
    {
        return new CountryResource($this->CountryRepository->getCountry());
    }
}

