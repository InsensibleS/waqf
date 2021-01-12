<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GrantStagesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('grant_stages')->insert([
            [
                'title' => 'Wating',

            ],
            [
                'title' => 'Selection of project',

            ],
            [
                'title' => 'Moderation',

            ],
            [
                'title' => 'Qualifying round',

            ],
            [
                'title' => 'Semifinal',

            ],
            [
                'title' => 'Final',

            ],
            [
                'title' => 'Summarizing',

            ],
            [
                'title' => 'Archive',

            ],
        ]);
    }
}
