<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProjectStatusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('project_statuses')->insert([
            [
                'title' => 'Published',

            ],
            [
                'title' => 'On moderation',

            ],
            [
                'title' => 'Rejected',

            ],
            [
                'title' => 'Archive',

            ],
        ]);
    }
}
