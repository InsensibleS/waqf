<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PartnerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('partners')->insert([
            [
                'title' => 'Company 1',
                'image' => '/images/partners-logo/partner1.png',
                'description' => 'Small for ask shade water manor think men begin. Estate was tended ten boy nearer seemed.',
            ],
            [
                'title' => 'Company 2',
                'image' => '/images/partners-logo/partner2.png',
                'description' => 'Estate was tended ten boy nearer seemed. Strictly numerous outlived kindness whatever on we no on addition. Equally he minutes my hastily.'
            ],
            [
                'title' => 'Company 3',
                'image' => '/images/partners-logo/partner3.png',
                'description' => 'Dissimilar admiration so terminated no in contrasted it. Made neat an on be gave show snug tore.'
            ],
            [
                'title' => 'Company 4',
                'image' => '/images/partners-logo/partner4.png',
                'description' => 'Sentiments two occasional affronting solicitude travelling and one contrasted. Advantages entreaties mr he apartments do.'
            ],
            [
                'title' => 'Company 5',
                'image' => '/images/partners-logo/partner5.png',
                'description' => 'Mrs assured add private married removed believe did she. Detract yet delight written farther his general.'
            ],
            [
                'title' => 'Company 6',
                'image' => '/images/partners-logo/partner6.png',
                'description' => 'Words to up style of since world. As mr started arrival subject by believe. Ecstatic elegance gay but disposed.'
            ],
        ]);
    }
}
