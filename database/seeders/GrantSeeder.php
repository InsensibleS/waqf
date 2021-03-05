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
                'number_wins' => 1,
                'number_finalists' => 5,
                'number_semifinalists' => 50,
                'grant_stage_id' => 7
            ],
            [
                'title' => 'United against COVID-19',
                'start_date' => '2021-02-26',
                'end_selection_projects' => '2021-02-26',
                'start_moderation' => '2021-03-02',
                'end_moderation' => '2021-03-03',
                'start_qualification' => '2021-03-04',
                'end_qualification' => '2021-03-05',
                'start_semifinal' => '2021-03-06',
                'end_semifinal' => '2021-03-07',
                'start_final' => '2021-03-08',
                'end_final' => '2021-03-09',
                'start_summarizing' => '2021-03-10',
                'end_date' => '2021-03-11',
                'publication_cost' => 2000,
                'number_wins' => 2,
                'number_finalists' => 5,
                'number_semifinalists' => 50,
                'grant_stage_id' => 1
            ],
            [
                'title' => 'Good climate all over the world',
                'start_date' => '2021-03-24',
                'end_selection_projects' => '2021-03-25',
                'start_moderation' => '2021-03-26',
                'end_moderation' => '2021-03-27',
                'start_qualification' => '2021-03-28',
                'end_qualification' => '2021-04-01',
                'start_semifinal' => '2021-04-02',
                'end_semifinal' => '2021-04-03',
                'start_final' => '2021-04-04',
                'end_final' => '2021-04-05',
                'start_summarizing' => '2021-04-06',
                'end_date' => '2021-04-07',
                'publication_cost' => 3000,
                'number_wins' => 1,
                'number_finalists' => 5,
                'number_semifinalists' => 50,
                'grant_stage_id' => 1
            ],
        ]);
    }
}
