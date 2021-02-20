<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GrantStagesUpdateSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('grant_stages_updates')->insert([
            [
                'updates_grants_id' => '1, 2',
                'start_process' => '2020-12-01 20:00:15',
                'end_process' => '2020-12-01 20:00:15',
                'is_successful' => true,
            ],
        ]);
    }
}
