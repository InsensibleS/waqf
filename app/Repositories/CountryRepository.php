<?php


namespace App\Repositories;
use  App\Models\Country;

class CountryRepository
{
    /**
     * @return array
     */
    public function getCountry()
    {
        return [
            'countryData' => Country::orderBy('title', 'desc')->get(),
        ];
    }

}
