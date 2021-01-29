<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class NewsCommentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('news_comments')->insert([
            [
                'news_id' => 5,
                'customer_id' => 1,
                'answer_to' => 1,
                'content' => 'This is very cool news!',
                'publication_date' => Carbon::createFromDate(2021,01,29)->toDateTimeString(),
                'is_ban' => false,
                'created_at' => Carbon::createFromDate(2021,01,29)->toDateTimeString(),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'news_id' => 5,
                'customer_id' => 2,
                'answer_to' => 1,
                'content' => 'Jeddah Charitable Association they rule!',
                'publication_date' => Carbon::createFromDate(2021,01,30)->toDateTimeString(),
                'is_ban' => false,
                'created_at' => Carbon::createFromDate(2021,01,30)->toDateTimeString(),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'news_id' => 2,
                'customer_id' => 1,
                'answer_to' => 1,
                'content' => 'Abdul Aziz is my favorite king',
                'publication_date' => Carbon::createFromDate(2021,01,31)->toDateTimeString(),
                'is_ban' => false,
                'created_at' => Carbon::createFromDate(2021,01,31)->toDateTimeString(),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'news_id' => 2,
                'customer_id' => 3,
                'answer_to' => 1,
                'content' => 'I support everything they do',
                'publication_date' => Carbon::createFromDate(2021,01,2)->toDateTimeString(),
                'is_ban' => false,
                'created_at' => Carbon::createFromDate(2021,01,30)->toDateTimeString(),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'news_id' => 3,
                'customer_id' => 3,
                'answer_to' => 1,
                'content' => 'Hey, I was the first to comment on this news :D',
                'publication_date' => Carbon::createFromDate(2021,01,2)->toDateTimeString(),
                'is_ban' => false,
                'created_at' => Carbon::createFromDate(2021,01,2)->toDateTimeString(),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'news_id' => 3,
                'customer_id' => 2,
                'answer_to' => 1,
                'content' => 'Cool',
                'publication_date' => Carbon::createFromDate(2021,01,4)->toDateTimeString(),
                'is_ban' => false,
                'created_at' => Carbon::createFromDate(2021,01,4)->toDateTimeString(),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'news_id' => 3,
                'customer_id' => 2,
                'answer_to' => 1,
                'content' => 'What do you think about it?',
                'publication_date' => Carbon::createFromDate(2021,01,5)->toDateTimeString(),
                'is_ban' => false,
                'created_at' => Carbon::createFromDate(2021,01,5)->toDateTimeString(),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'news_id' => 3,
                'customer_id' => 3,
                'answer_to' => 1,
                'content' => 'I agree',
                'publication_date' => Carbon::createFromDate(2021,01,6)->toDateTimeString(),
                'is_ban' => false,
                'created_at' => Carbon::createFromDate(2021,01,6)->toDateTimeString(),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'news_id' => 4,
                'customer_id' => 2,
                'answer_to' => 1,
                'content' => 'I agree',
                'publication_date' => Carbon::createFromDate(2021,01,7)->toDateTimeString(),
                'is_ban' => false,
                'created_at' => Carbon::createFromDate(2021,01,7)->toDateTimeString(),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'news_id' => 1,
                'customer_id' => 1,
                'answer_to' => 1,
                'content' => 'Would sooner end this',
                'publication_date' => Carbon::createFromDate(2021,01,7)->toDateTimeString(),
                'is_ban' => false,
                'created_at' => Carbon::createFromDate(2021,01,7)->toDateTimeString(),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'news_id' => 1,
                'customer_id' => 1,
                'answer_to' => 1,
                'content' => 'What a horror, if only it would be over already, otherwise the whole world fell into a drunken',
                'publication_date' => Carbon::createFromDate(2021,01,8)->toDateTimeString(),
                'is_ban' => false,
                'created_at' => Carbon::createFromDate(2021,01,8)->toDateTimeString(),
                'updated_at' => date('Y-m-d H:i:s')
            ],
        ]);
    }
}
