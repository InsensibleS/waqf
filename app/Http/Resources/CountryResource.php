<?php


namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;


class CountryResource extends JsonResource
{
    protected $countryData;

    public function __construct($country)
    {
        $this->countryData = $country;
    }

    /**
     * Transform the resource into an array.
     *
     * @param \Illuminate\Http\Request $request
     * @return string
     */
    public function toArray($request)
    {
        return $this->countryData->title;
    }
}
