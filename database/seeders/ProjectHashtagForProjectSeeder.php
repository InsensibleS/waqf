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
            //Other
            [
                'hashtag_id' => 6,
                'project_id' => 10
            ],
            [
                'hashtag_id' => 8,
                'project_id' => 10
            ],
            [
                'hashtag_id' => 9,
                'project_id' => 10
            ],
            //Other
            [
                'hashtag_id' => 6,
                'project_id' => 11
            ],
            [
                'hashtag_id' => 8,
                'project_id' => 11
            ],
            [
                'hashtag_id' => 14,
                'project_id' => 11
            ],
            //Other
            [
                'hashtag_id' =>11,
                'project_id' => 12
            ],
            [
                'hashtag_id' => 13,
                'project_id' => 12
            ],
            [
                'hashtag_id' => 2,
                'project_id' => 12
            ],
            [
                'hashtag_id' => 4,
                'project_id' => 12
            ],

            //Other
            [
                'hashtag_id' => 6,
                'project_id' => 13
            ],
            [
                'hashtag_id' => 8,
                'project_id' => 14
            ],
            [
                'hashtag_id' => 5,
                'project_id' => 14
            ],
            //Other
            [
                'hashtag_id' => 7,
                'project_id' => 15
            ],
            [
                'hashtag_id' => 10,
                'project_id' => 15
            ],
            [
                'hashtag_id' => 12,
                'project_id' => 15
            ],
            //Other
            [
                'hashtag_id' => 11,
                'project_id' => 16
            ],
            [
                'hashtag_id' => 6,
                'project_id' => 16
            ],
            [
                'hashtag_id' => 7,
                'project_id' => 16
            ],
            //Other
            [
                'hashtag_id' => 3,
                'project_id' => 17
            ],
            [
                'hashtag_id' => 14,
                'project_id' => 17
            ],
            [
                'hashtag_id' => 1,
                'project_id' => 17
            ],
            //Other
            [
                'hashtag_id' => 6,
                'project_id' => 18
            ],
            [
                'hashtag_id' => 5,
                'project_id' => 18
            ],
            [
                'hashtag_id' => 7,
                'project_id' => 18
            ],
            //Other
            [
                'hashtag_id' => 4,
                'project_id' => 19
            ],
            [
                'hashtag_id' => 2,
                'project_id' => 19
            ],
            [
                'hashtag_id' => 10,
                'project_id' => 19
            ],
            //Other
            [
                'hashtag_id' => 7,
                'project_id' => 20
            ],
            [
                'hashtag_id' => 8,
                'project_id' => 20
            ],
            [
                'hashtag_id' => 9,
                'project_id' => 20
            ],
            //Other
            [
                'hashtag_id' => 14,
                'project_id' => 21
            ],
            [
                'hashtag_id' => 13,
                'project_id' => 21
            ],
            [
                'hashtag_id' => 12,
                'project_id' => 21
            ],
            //Other
            [
                'hashtag_id' => 6,
                'project_id' => 22
            ],
            [
                'hashtag_id' => 8,
                'project_id' => 22
            ],
            [
                'hashtag_id' => 7,
                'project_id' => 22
            ],
            //Other
            [
                'hashtag_id' => 2,
                'project_id' => 23
            ],
            [
                'hashtag_id' => 8,
                'project_id' => 23
            ],
            [
                'hashtag_id' => 3,
                'project_id' => 23
            ],
            //Other
            [
                'hashtag_id' => 1,
                'project_id' => 24
            ],
            [
                'hashtag_id' => 4,
                'project_id' => 24
            ],
            [
                'hashtag_id' => 14,
                'project_id' => 24
            ],
            //Other
            [
                'hashtag_id' => 3,
                'project_id' => 25
            ],
            [
                'hashtag_id' => 2,
                'project_id' => 25
            ],
            [
                'hashtag_id' => 1,
                'project_id' => 25
            ],
            //Other
            [
                'hashtag_id' => 1,
                'project_id' => 26
            ],
            [
                'hashtag_id' => 2,
                'project_id' => 26
            ],
            [
                'hashtag_id' => 3,
                'project_id' => 26
            ],
            //Other
            [
                'hashtag_id' => 14,
                'project_id' => 27
            ],
            [
                'hashtag_id' => 13,
                'project_id' => 27
            ],
            [
                'hashtag_id' => 12,
                'project_id' => 27
            ],
            //Other
            [
                'hashtag_id' => 11,
                'project_id' => 28
            ],
            [
                'hashtag_id' => 10,
                'project_id' => 28
            ],
            [
                'hashtag_id' => 9,
                'project_id' => 28
            ],
            //Other
            [
                'hashtag_id' => 8,
                'project_id' => 29
            ],
            [
                'hashtag_id' => 7,
                'project_id' => 29
            ],
            [
                'hashtag_id' => 6,
                'project_id' => 29
            ],
            //Other
            [
                'hashtag_id' => 5,
                'project_id' => 30
            ],
            [
                'hashtag_id' => 4,
                'project_id' => 30
            ],
            [
                'hashtag_id' => 3,
                'project_id' => 30
            ],
            //Other
            [
                'hashtag_id' => 2,
                'project_id' => 31
            ],
            [
                'hashtag_id' => 1,
                'project_id' => 31
            ],
            [
                'hashtag_id' => 14,
                'project_id' => 31
            ],
            //Other
            [
                'hashtag_id' => 13,
                'project_id' => 32
            ],
            [
                'hashtag_id' => 12,
                'project_id' => 32
            ],
            [
                'hashtag_id' => 11,
                'project_id' => 32
            ],
            //Other
            [
                'hashtag_id' => 10,
                'project_id' => 33
            ],
            [
                'hashtag_id' => 9,
                'project_id' => 33
            ],
            [
                'hashtag_id' => 8,
                'project_id' => 33
            ],
            //Other
            [
                'hashtag_id' => 7,
                'project_id' => 34
            ],
            [
                'hashtag_id' => 6,
                'project_id' => 34
            ],
            [
                'hashtag_id' => 5,
                'project_id' => 34
            ],
            //Other
            [
                'hashtag_id' => 4,
                'project_id' => 35
            ],
            [
                'hashtag_id' => 3,
                'project_id' => 35
            ],
            [
                'hashtag_id' => 2,
                'project_id' => 35
            ],
            //Other
            [
                'hashtag_id' => 1,
                'project_id' => 36
            ],
            [
                'hashtag_id' => 14,
                'project_id' => 36
            ],
            [
                'hashtag_id' => 13,
                'project_id' => 36
            ],
            //Other
            [
                'hashtag_id' => 12,
                'project_id' => 37
            ],
            [
                'hashtag_id' => 11,
                'project_id' => 37
            ],
            [
                'hashtag_id' => 10,
                'project_id' => 37
            ],
            //Other
            [
                'hashtag_id' => 9,
                'project_id' => 38
            ],
            [
                'hashtag_id' => 8,
                'project_id' => 38
            ],
            [
                'hashtag_id' => 7,
                'project_id' => 38
            ],
            //Other
            [
                'hashtag_id' => 6,
                'project_id' => 39
            ],
            [
                'hashtag_id' => 5,
                'project_id' => 39
            ],
            [
                'hashtag_id' => 4,
                'project_id' => 39
            ],
            //Other
            [
                'hashtag_id' => 3,
                'project_id' => 40
            ],
            [
                'hashtag_id' => 2,
                'project_id' => 40
            ],
            [
                'hashtag_id' => 1,
                'project_id' => 40
            ],
        ]);
    }
}
