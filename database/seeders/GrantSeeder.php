<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GrantSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('grants')->insert([
            [
                'title' => 'Saving Africa',
                'start_date' => '2020-12-01',
                'end_selection_projects' => '2020-12-05',
                'start_moderation' => '2020-12-06',
                'end_moderation' => '2020-12-07',
                'start_qualification' => '2020-12-08',
                'end_qualification' => '2020-12-12',
                'start_semifinal' => '2020-12-13',
                'end_semifinal' => '2020-12-20',
                'start_final' => '2020-12-21',
                'end_final' => '2020-12-25',
                'start_summarizing' => '2020-12-25',
                'end_date' => '2020-12-30',
                'publication_cost' => 1000,
                'number_finalists' => 5,
                'number_semifinalists' => 50,
                'grant_stage_id' => 8
            ],
            [
                'title' => 'United against COVID-19',
                'start_date' => '2021-01-15',
                'end_selection_projects' => '2021-02-28',
                'start_moderation' => '2021-01-28',
                'end_moderation' => '2021-01-29',
                'start_qualification' => '2021-01-30',
                'end_qualification' => '2021-01-31',
                'start_semifinal' => '2021-02-01',
                'end_semifinal' => '2021-02-02',
                'start_final' => '2021-02-03',
                'end_final' => '2021-02-06',
                'start_summarizing' => '2021-02-07',
                'end_date' => '2021-02-10',
                'publication_cost' => 2000,
                'number_finalists' => 5,
                'number_semifinalists' => 50,
                'grant_stage_id' => 2
            ],
            [
                'title' => 'Good climate all over the world',
                'start_date' => '2021-02-10',
                'end_selection_projects' => '2021-02-15',
                'start_moderation' => '2021-02-16',
                'end_moderation' => '2021-02-17',
                'start_qualification' => '2021-02-17',
                'end_qualification' => '2021-02-20',
                'start_semifinal' => '2021-02-21',
                'end_semifinal' => '2021-02-23',
                'start_final' => '2021-02-24',
                'end_final' => '2021-02-26',
                'start_summarizing' => '2021-02-27',
                'end_date' => '2021-02-28',
                'publication_cost' => 3000,
                'number_finalists' => 5,
                'number_semifinalists' => 50,
                'grant_stage_id' => 1
            ],
        ]);
    }
}
