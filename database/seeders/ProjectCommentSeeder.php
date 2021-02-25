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
                'publication_date' => Carbon::createFromDate(2021,02,28)->toDateTimeString(),
                'is_active' => true,
                'created_at' => Carbon::createFromDate(2021,02,28)->toDateTimeString(),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            //2
            [
                'project_id' => 1,
                'customer_id' => 2,
                'answer_to' => 1,
                'content' => 'I completely agree!',
                'publication_date' => Carbon::createFromDate(2021,03,1)->toDateTimeString(),
                'is_active' => true,
                'created_at' => Carbon::createFromDate(2021,03,1)->toDateTimeString(),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            //3
            [
                'project_id' => 1,
                'customer_id' => 1,
                'answer_to' => null,
                'content' => 'But it seems to me that I have already met something similar',
                'publication_date' => Carbon::createFromDate(2021,03,2)->toDateTimeString(),
                'is_active' => true,
                'created_at' => Carbon::createFromDate(2021,03,2)->toDateTimeString(),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            //4
            [
                'project_id' => 2,
                'customer_id' => 3,
                'answer_to' => null,
                'content' => 'I support everything they do',
                'publication_date' => Carbon::createFromDate(2021,02,27)->toDateTimeString(),
                'is_active' => true,
                'created_at' => Carbon::createFromDate(2021,02,27)->toDateTimeString(),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            //5
            [
                'project_id' => 2,
                'customer_id' => 3,
                'answer_to' => 4,
                'content' => 'I also support',
                'publication_date' => Carbon::createFromDate(2021,02,28)->toDateTimeString(),
                'is_active' => true,
                'created_at' => Carbon::createFromDate(2021,02,28)->toDateTimeString(),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            //6
            [
                'project_id' => 3,
                'customer_id' => 2,
                'answer_to' => null,
                'content' => 'This is an award-winning project',
                'publication_date' => Carbon::createFromDate(2021,02,25)->toDateTimeString(),
                'is_active' => true,
                'created_at' => Carbon::createFromDate(2021,02,25)->toDateTimeString(),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            //7
            [
                'project_id' => 3,
                'customer_id' => 1,
                'answer_to' => null,
                'content' => 'Perhaps he will be among the finalists',
                'publication_date' => Carbon::createFromDate(2021,02,27)->toDateTimeString(),
                'is_active' => true,
                'created_at' => Carbon::createFromDate(2021,02,27)->toDateTimeString(),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            //8
            [
                'project_id' => 3,
                'customer_id' => 3,
                'answer_to' => 7,
                'content' => 'Hardly',
                'publication_date' => Carbon::createFromDate(2021,02,28)->toDateTimeString(),
                'is_active' => true,
                'created_at' => Carbon::createFromDate(2021,02,28)->toDateTimeString(),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            //9
            [
                'project_id' => 3,
                'customer_id' => 2,
                'answer_to' => 7,
                'content' => 'Will be among the finalists, you',
                'publication_date' => Carbon::createFromDate(2021,03,2)->toDateTimeString(),
                'is_active' => true,
                'created_at' => Carbon::createFromDate(2021,03,2)->toDateTimeString(),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            //10
            [
                'project_id' => 4,
                'customer_id' => 1,
                'answer_to' => null,
                'content' => 'This project is not worthy of any criticism!',
                'publication_date' => Carbon::createFromDate(2021,03,1)->toDateTimeString(),
                'is_active' => true,
                'created_at' => Carbon::createFromDate(2021,03,1)->toDateTimeString(),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            //11
            [
                'project_id' => 4,
                'customer_id' => 2,
                'answer_to' => 10,
                'content' => 'I disagree with you!',
                'publication_date' => Carbon::createFromDate(2021,03,1)->toDateTimeString(),
                'is_active' => true,
                'created_at' => Carbon::createFromDate(2021,03,1)->toDateTimeString(),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            //12
            [
                'project_id' => 5,
                'customer_id' => 2,
                'answer_to' => null,
                'content' => 'Cool, good project, vote for it',
                'publication_date' => Carbon::createFromDate(2021,02,28)->toDateTimeString(),
                'is_active' => true,
                'created_at' => Carbon::createFromDate(2021,02,28)->toDateTimeString(),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            //13
            [
                'project_id' => 5,
                'customer_id' => 2,
                'answer_to' => null,
                'content' => 'Cool, good project, vote for it',
                'publication_date' => Carbon::createFromDate(2021,02,8)->toDateTimeString(),
                'is_active' => true,
                'created_at' => Carbon::createFromDate(2021,01,8)->toDateTimeString(),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            //14
            [
                'project_id' => 8,
                'customer_id' => 1,
                'answer_to' => null,
                'content' => 'An interesting suggestion, but not all people like the smell of antiseptic',
                'publication_date' => Carbon::createFromDate(2021,02,26)->toDateTimeString(),
                'is_active' => true,
                'created_at' => Carbon::createFromDate(2021,02,26)->toDateTimeString(),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            //15
            [
                'project_id' => 8,
                'customer_id' => 2,
                'answer_to' => 14,
                'content' => 'I like',
                'publication_date' => Carbon::createFromDate(2021,02,26)->toDateTimeString(),
                'is_active' => true,
                'created_at' => Carbon::createFromDate(2021,02,26)->toDateTimeString(),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            //16
            [
                'project_id' => 8,
                'customer_id' => 2,
                'answer_to' => 14,
                'content' => 'I fully support it',
                'publication_date' => Carbon::createFromDate(2021,02,27)->toDateTimeString(),
                'is_active' => true,
                'created_at' => Carbon::createFromDate(2021,02,27)->toDateTimeString(),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            //17
            [
                'project_id' => 8,
                'customer_id' => 2,
                'answer_to' => 14,
                'content' => 'I fully support it',
                'publication_date' => Carbon::createFromDate(2021,02,27)->toDateTimeString(),
                'is_active' => true,
                'created_at' => Carbon::createFromDate(2021,02,27)->toDateTimeString(),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            //18
            [
                'project_id' => 11,
                'customer_id' => 3,
                'answer_to' => null,
                'content' => 'This is already in some countries, right?',
                'publication_date' => Carbon::createFromDate(2021,02,27)->toDateTimeString(),
                'is_active' => true,
                'created_at' => Carbon::createFromDate(2021,02,27)->toDateTimeString(),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            //19
            [
                'project_id' => 11,
                'customer_id' => 1,
                'answer_to' => 18,
                'content' => 'Yes, for example in Canada, there are many videos about this',
                'publication_date' => Carbon::createFromDate(2021,02,27)->toDateTimeString(),
                'is_active' => true,
                'created_at' => Carbon::createFromDate(2021,02,27)->toDateTimeString(),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            //20
            [
            'project_id' => 14,
            'customer_id' => 1,
            'answer_to' => null,
            'content' => "I don't understand a bit how it is?",
            'publication_date' => Carbon::createFromDate(2021,02,27)->toDateTimeString(),
            'is_active' => true,
            'created_at' => Carbon::createFromDate(2021,02,27)->toDateTimeString(),
            'updated_at' => date('Y-m-d H:i:s')
            ],
            //21
            [
                'project_id' => 14,
                'customer_id' => 3,
                'answer_to' => 20,
                'content' => "Well, there is a special application that monitors the movement for a month, when entering a vehicle, they may ask to show the QR code from this very application, where the green color shows that everything is fine, yellow - you need to sit at home for a week,
and red - mandatory isolation for 14 days",
                'publication_date' => Carbon::createFromDate(2021,02,27)->toDateTimeString(),
                'is_active' => true,
                'created_at' => Carbon::createFromDate(2021,02,27)->toDateTimeString(),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            //22
            [
                'project_id' => 15,
                'customer_id' => 2,
                'answer_to' => null,
                'content' => "This is the future",
                'publication_date' => Carbon::createFromDate(2021,02,27)->toDateTimeString(),
                'is_active' => true,
                'created_at' => Carbon::createFromDate(2021,02,27)->toDateTimeString(),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            //23
            [
                'project_id' => 19,
                'customer_id' => 3,
                'answer_to' => null,
                'content' => "I like to eat tasty and technological",
                'publication_date' => Carbon::createFromDate(2021,03,1)->toDateTimeString(),
                'is_active' => true,
                'created_at' => Carbon::createFromDate(2021,03,1)->toDateTimeString(),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            //24
            [
                'project_id' => 19,
                'customer_id' => 2,
                'answer_to' => null,
                'content' => "And it won't require a tip",
                'publication_date' => Carbon::createFromDate(2021,03,1)->toDateTimeString(),
                'is_active' => true,
                'created_at' => Carbon::createFromDate(2021,03,1)->toDateTimeString(),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            //25
            [
                'project_id' => 19,
                'customer_id' => 1,
                'answer_to' => null,
                'content' => "Already imagine burgers falling on your head",
                'publication_date' => Carbon::createFromDate(2021,03,1)->toDateTimeString(),
                'is_active' => true,
                'created_at' => Carbon::createFromDate(2021,03,1)->toDateTimeString(),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            //26
            [
                'project_id' => 22,
                'customer_id' => 1,
                'answer_to' => null,
                'content' => "Surveillance, invasion of your life! even for work",
                'publication_date' => Carbon::createFromDate(2021,03,1)->toDateTimeString(),
                'is_active' => true,
                'created_at' => Carbon::createFromDate(2021,03,1)->toDateTimeString(),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            //27
            [
                'project_id' => 22,
                'customer_id' =>2,
                'answer_to' => 26,
                'content' => "Come on, it's just to improve communication in the company itself",
                'publication_date' => Carbon::createFromDate(2021,03,1)->toDateTimeString(),
                'is_active' => true,
                'created_at' => Carbon::createFromDate(2021,03,1)->toDateTimeString(),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            //28
            [
                'project_id' => 26,
                'customer_id' =>3,
                'answer_to' => null,
                'content' => "It will help you keep your distance",
                'publication_date' => Carbon::createFromDate(2021,03,1)->toDateTimeString(),
                'is_active' => true,
                'created_at' => Carbon::createFromDate(2021,03,1)->toDateTimeString(),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            //29
            [
                'project_id' => 17,
                'customer_id' =>3,
                'answer_to' => null,
                'content' => "Very useful, I hope it will help surgeons",
                'publication_date' => Carbon::createFromDate(2021,03,1)->toDateTimeString(),
                'is_active' => true,
                'created_at' => Carbon::createFromDate(2021,03,1)->toDateTimeString(),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            //30
            [
                'project_id' => 17,
                'customer_id' =>3,
                'answer_to' => null,
                'content' => "Everything will be clearer",
                'publication_date' => Carbon::createFromDate(2021,03,1)->toDateTimeString(),
                'is_active' => true,
                'created_at' => Carbon::createFromDate(2021,03,1)->toDateTimeString(),
                'updated_at' => date('Y-m-d H:i:s')
            ],
        ]);
    }
}
