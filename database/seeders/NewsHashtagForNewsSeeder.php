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
            //The third News((id)
            [
                'hashtag_id' => 4,
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
        ]);
    }
}
