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
     * @return array
     */
    public function toArray($request)
    {
        return [
            'id' => $this->countryData->id,
            'title' => $this->countryData->title,
        ];
    }
}
