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
        $countries = Country::orderBy('title', 'asc')->get();
        return $countries;
    }

}
