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
    public function getDataAboutPage()
    {
        return [
            'aboutPage' => AboutPage::first(),
            'teamMember' => TeamMember::all(),
            'partnersData' => Partner::orderBy('order')->get(),
        ];
    }
}
