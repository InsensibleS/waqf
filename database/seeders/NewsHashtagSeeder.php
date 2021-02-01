<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class NewsHashtagSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('news_hashtags')->insert([
            [
                'title' => 'virus',
            ],
            [
                'title' => 'vaccine',
            ],
            [
                'title' => 'Saudi Arabia',
            ],
            [
                'title' => 'history',
            ],
            [
                'title' => 'TISC',
            ],
            [
                'title' => 'Arabic',
            ],
            [
                'title' => 'COVID-19',
            ],
            [
                'title' => 'Mawhiba',
            ],
            [
                'title' => 'OJCA',
            ],
        ]);
    }
}
