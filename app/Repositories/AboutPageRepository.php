<?php


namespace App\Repositories;

use App\Models\AboutPage;
use App\Models\Partner;
use App\Models\TeamMember;

class AboutPageRepository
{
    /**
     * @return array
     */
    public function getDataMainPage()
    {
        return [
            'AboutPage' => AboutPage::first(),
            'TeamMember' => TeamMember::all(),
            'partnersData' => Partner::orderBy('order')->get(),
        ];
    }
}
