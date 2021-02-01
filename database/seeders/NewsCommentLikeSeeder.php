<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class NewsCommentLikeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('comment_likes_news')->insert([
            [
                'customer_id' => 1,
                'news_comments_id' => 2,
            ],
            [
                'customer_id' => 2,
                'news_comments_id' => 1,
            ],
            [
                'customer_id' => 2,
                'news_comments_id' => 3,
            ],
            [
                'customer_id' => 1,
                'news_comments_id' => 4,
            ],
            [
                'customer_id' => 2,
                'news_comments_id' => 5,
            ],
            [
                'customer_id' => 2,
                'news_comments_id' => 4,
            ],
            [
                'customer_id' => 1,
                'news_comments_id' => 6,
            ],
            [
                'customer_id' => 2,
                'news_comments_id' => 6,
            ],
        ]);
    }
}
