<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProjectCommentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('project_comments')->insert([
            //1
            [
                'project_id' => 1,
                'customer_id' => 1,
                'answer_to' => null,
                'content' => 'This is very cool project!',
                'publication_date' => Carbon::createFromDate(2021,01,29)->toDateTimeString(),
                'is_active' => true,
                'created_at' => Carbon::createFromDate(2021,01,29)->toDateTimeString(),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            //2
            [
                'project_id' => 1,
                'customer_id' => 2,
                'answer_to' => 1,
                'content' => 'I completely agree!',
                'publication_date' => Carbon::createFromDate(2021,01,30)->toDateTimeString(),
                'is_active' => true,
                'created_at' => Carbon::createFromDate(2021,01,30)->toDateTimeString(),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            //3
            [
                'project_id' => 1,
                'customer_id' => 1,
                'answer_to' => null,
                'content' => 'But it seems to me that I have already met something similar',
                'publication_date' => Carbon::createFromDate(2021,01,31)->toDateTimeString(),
                'is_active' => true,
                'created_at' => Carbon::createFromDate(2021,01,31)->toDateTimeString(),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            //4
            [
                'project_id' => 2,
                'customer_id' => 3,
                'answer_to' => null,
                'content' => 'I support everything they do',
                'publication_date' => Carbon::createFromDate(2021,01,2)->toDateTimeString(),
                'is_active' => true,
                'created_at' => Carbon::createFromDate(2021,01,30)->toDateTimeString(),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            //5
            [
                'project_id' => 2,
                'customer_id' => 3,
                'answer_to' => 4,
                'content' => 'I also support',
                'publication_date' => Carbon::createFromDate(2021,01,3)->toDateTimeString(),
                'is_active' => true,
                'created_at' => Carbon::createFromDate(2021,01,2)->toDateTimeString(),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            //6
            [
                'project_id' => 3,
                'customer_id' => 2,
                'answer_to' => null,
                'content' => 'This is an award-winning project',
                'publication_date' => Carbon::createFromDate(2021,01,4)->toDateTimeString(),
                'is_active' => true,
                'created_at' => Carbon::createFromDate(2021,01,4)->toDateTimeString(),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            //7
            [
                'project_id' => 3,
                'customer_id' => 1,
                'answer_to' => null,
                'content' => 'Perhaps he will be among the finalists',
                'publication_date' => Carbon::createFromDate(2021,01,5)->toDateTimeString(),
                'is_active' => true,
                'created_at' => Carbon::createFromDate(2021,01,5)->toDateTimeString(),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            //8
            [
                'project_id' => 3,
                'customer_id' => 3,
                'answer_to' => 7,
                'content' => 'Hardly',
                'publication_date' => Carbon::createFromDate(2021,01,6)->toDateTimeString(),
                'is_active' => true,
                'created_at' => Carbon::createFromDate(2021,01,6)->toDateTimeString(),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            //9
            [
                'project_id' => 3,
                'customer_id' => 2,
                'answer_to' => 7,
                'content' => 'Will be among the finalists, you',
                'publication_date' => Carbon::createFromDate(2021,01,7)->toDateTimeString(),
                'is_active' => true,
                'created_at' => Carbon::createFromDate(2021,01,7)->toDateTimeString(),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            //10
            [
                'project_id' => 4,
                'customer_id' => 1,
                'answer_to' => null,
                'content' => 'This project is not worthy of any criticism!',
                'publication_date' => Carbon::createFromDate(2021,01,7)->toDateTimeString(),
                'is_active' => true,
                'created_at' => Carbon::createFromDate(2021,01,7)->toDateTimeString(),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            //11
            [
                'project_id' => 4,
                'customer_id' => 2,
                'answer_to' => 10,
                'content' => 'I disagree with you!',
                'publication_date' => Carbon::createFromDate(2021,01,8)->toDateTimeString(),
                'is_active' => true,
                'created_at' => Carbon::createFromDate(2021,01,8)->toDateTimeString(),
                'updated_at' => date('Y-m-d H:i:s')
            ],
        ]);
    }
}
