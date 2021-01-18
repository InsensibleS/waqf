<?php


namespace App\Repositories;
use  App\Models\Country;

class CountryRepository
{
    /**
     * @return array
     */
    public function getAllCountries()
    {
        $country= Country::orderBy('title')->get();
        return $country;
    }

}
