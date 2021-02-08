<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class NewsHashtagForNewsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('news_hashtag_for_news')->insert([
            //The first News(id)
            [
                'hashtag_id' => 1,
                'news_id' => 1
            ],
            [
                'hashtag_id' => 2,
                'news_id' => 1
            ],
            [
                'hashtag_id' => 3,
                'news_id' => 1
            ],
            [
                'hashtag_id' => 7,
                'news_id' => 1
            ],
            //The second News(id)
            [
                'hashtag_id' => 7,
                'news_id' => 2
            ],
            [
                'hashtag_id' => 3,
                'news_id' => 2
            ],
            [
                'hashtag_id' => 1,
                'news_id' => 3
            ],
            //The third News((id)
            [
                'hashtag_id' => 4,
                'news_id' => 3
            ],
            [
                'hashtag_id' => 7,
                'news_id' => 3
            ],
            //The fourth  News(id)
            [
                'hashtag_id' => 5,
                'news_id' => 4
            ],
            [
                'hashtag_id' => 8,
                'news_id' => 4
            ],
            //The fifth News(id)
            [
                'hashtag_id' => 9,
                'news_id' => 5
            ],
            [
                'hashtag_id' => 7,
                'news_id' => 5
            ],
            // news 6
            [
                'hashtag_id' => 7,
                'news_id' => 6
            ],
            // news 7
            [
                'hashtag_id' => 1,
                'news_id' => 7
            ],
            [
                'hashtag_id' => 7,
                'news_id' => 7
            ],
            // news 8
            [
                'hashtag_id' => 7,
                'news_id' => 8
            ],
            // news 9
            [
                'hashtag_id' => 1,
                'news_id' => 9
            ],
            [
                'hashtag_id' => 7,
                'news_id' => 9
            ],
            // news 10
            [
                'hashtag_id' => 7,
                'news_id' => 10
            ],
            // news 11
            [
                'hashtag_id' => 1,
                'news_id' => 11
            ],
            [
                'hashtag_id' => 7,
                'news_id' => 11
            ],
            // news 12
            [
                'hashtag_id' => 7,
                'news_id' => 12
            ],
            // news 13
            [
                'hashtag_id' => 1,
                'news_id' => 13
            ],
            [
                'hashtag_id' => 7,
                'news_id' => 13
            ],
            // news 14
            [
                'hashtag_id' => 7,
                'news_id' => 14
            ],
            // news 15
            [
                'hashtag_id' => 1,
                'news_id' => 15
            ],
            [
                'hashtag_id' => 7,
                'news_id' => 15
            ],
            // news 16
            [
                'hashtag_id' => 7,
                'news_id' => 16
            ],
            // news 17
            [
                'hashtag_id' => 1,
                'news_id' => 17
            ],
            // news 18
            [
                'hashtag_id' => 7,
                'news_id' => 18
            ],
            [
                'hashtag_id' => 7,
                'news_id' => 17
            ],
            // news 19
            [
                'hashtag_id' => 1,
                'news_id' => 19
            ],
            // news 20
            [
                'hashtag_id' => 7,
                'news_id' => 20
            ],
            [
                'hashtag_id' => 1,
                'news_id' => 20
            ],
            // news 21
            [
                'hashtag_id' => 1,
                'news_id' => 21
            ],
            // news 22
            [
                'hashtag_id' => 7,
                'news_id' => 22
            ],
            [
                'hashtag_id' => 1,
                'news_id' => 22
            ],
            // news 23
            [
                'hashtag_id' => 1,
                'news_id' => 23
            ],
            // news 24
            [
                'hashtag_id' => 1,
                'news_id' => 24
            ],
            // news 25
            [
                'hashtag_id' => 1,
                'news_id' => 25
            ],
        ]);
    }
}
