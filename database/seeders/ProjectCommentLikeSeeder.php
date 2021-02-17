<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProjectCommentLikeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('project_comment_likes')->insert([
            [
                'customer_id' => 1,
                'project_comment_id' => 1,
            ],
            [
                'customer_id' => 1,
                'project_comment_id' => 2,
            ],
            [
                'customer_id' => 1,
                'project_comment_id' => 3,
            ],
            [
                'customer_id' => 1,
                'project_comment_id' => 4,
            ],
            [
                'customer_id' => 1,
                'project_comment_id' => 5,
            ],
            [
                'customer_id' => 1,
                'project_comment_id' => 6,
            ],
            [
                'customer_id' => 1,
                'project_comment_id' => 7,
            ],
            [
                'customer_id' => 1,
                'project_comment_id' => 8,
            ],
            [
                'customer_id' => 1,
                'project_comment_id' => 9,
            ],
            [
                'customer_id' => 2,
                'project_comment_id' => 1,
            ],
            [
                'customer_id' => 2,
                'project_comment_id' => 2,
            ],
            [
                'customer_id' => 2,
                'project_comment_id' => 3,
            ],
            [
                'customer_id' => 2,
                'project_comment_id' => 4,
            ],
            [
                'customer_id' => 2,
                'project_comment_id' => 5,
            ],
            [
                'customer_id' => 2,
                'project_comment_id' => 10,
            ],
            [
                'customer_id' => 3,
                'project_comment_id' => 10,
            ],
            [
                'customer_id' => 3,
                'project_comment_id' => 11,
            ],
        ]);
    }
}
