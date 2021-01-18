<?php


namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;


class CountryResource extends JsonResource
{
    protected $countryData;

    public function __construct($countryData)
    {
        $this->countryData = $countryData['countryData'];
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
            'countryData' => [
                'title' => $this->countryData,
            ],
        ];
    }
}
