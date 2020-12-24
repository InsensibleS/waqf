<?php

namespace App\Repositories;

use App\Models\MainPageAttribute;
use App\Models\Partner;

class MainPageRepository
{
    /**
     * @return array
     */
    public function getDataMainPage()
    {
        return [
            'mainPageAttributes' => MainPageAttribute::first(),
            'newsData' => [],
            'partnersData' => Partner::orderBy('order')->get(),
        ];
    }
}
