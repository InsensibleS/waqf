<?php

namespace App\Repositories;

use App\Models\MainPageAttribute;
use App\Models\News;
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
            'newsData' => News::orderBy('publication_date', 'desc')->get(),
            'partnersData' => Partner::orderBy('order')->get(),
        ];
    }
}
