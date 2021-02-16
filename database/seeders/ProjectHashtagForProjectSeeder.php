<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProjectHashtagForProjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('hashtag_project')->insert([
            //The first Project(id)
            [
                'hashtag_id' => 1,
                'project_id' => 1
            ],
            [
                'hashtag_id' => 2,
                'project_id' => 1
            ],
            [
                'hashtag_id' => 3,
                'project_id' => 1
            ],
            //The second Project(id)
            [
                'hashtag_id' => 4,
                'project_id' => 2
            ],
            [
                'hashtag_id' => 5,
                'project_id' => 2
            ],
            [
                'hashtag_id' => 1,
                'project_id' => 2
            ],
            //The third Project(id)
            [
                'hashtag_id' => 2,
                'project_id' => 3
            ],
            [
                'hashtag_id' => 3,
                'project_id' => 3
            ],
            [
                'hashtag_id' => 4,
                'project_id' => 3
            ],
            //The fourth  Project(id)
            [
                'hashtag_id' => 5,
                'project_id' => 4
            ],
            [
                'hashtag_id' => 1,
                'project_id' => 4
            ],
            [
                'hashtag_id' => 2,
                'project_id' => 4
            ],
            //The fifth Project(id)
            [
                'hashtag_id' => 3,
                'project_id' => 5
            ],
            [
                'hashtag_id' => 4,
                'project_id' => 5
            ],
            [
                'hashtag_id' => 5,
                'project_id' => 5
            ],
            //The sixth Project(id)
            [
                'hashtag_id' => 1,
                'project_id' => 6
            ],
            [
                'hashtag_id' => 2,
                'project_id' => 6
            ],
            [
                'hashtag_id' => 3,
                'project_id' => 6
            ],
            //The seventh Project(id)
            [
                'hashtag_id' => 4,
                'project_id' => 7
            ],
            [
                'hashtag_id' => 5,
                'project_id' => 7
            ],
            [
                'hashtag_id' => 1,
                'project_id' => 7
            ],
            //The eighth Project(id)
            [
                'hashtag_id' => 2,
                'project_id' => 8
            ],
            [
                'hashtag_id' => 3,
                'project_id' => 8
            ],
            [
                'hashtag_id' => 4,
                'project_id' => 8
            ],
            //The ninth Project(id)
            [
                'hashtag_id' => 5,
                'project_id' => 9
            ],
            [
                'hashtag_id' => 1,
                'project_id' => 9
            ],
            [
                'hashtag_id' => 2,
                'project_id' => 9
            ],
        ]);
    }
}
