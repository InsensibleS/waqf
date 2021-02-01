<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class NewsCommentDislikeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('news_comment_dislikes')->insert([
            [
                'customer_id' => 2,
                'news_comments_id' => 11,
            ],
            [
                'customer_id' => 2,
                'news_comments_id' => 10,
            ],
            [
                'customer_id' => 1,
                'news_comments_id' => 9,
            ],
            [
                'customer_id' => 2,
                'news_comments_id' => 9,
            ],
            [
                'customer_id' => 2,
                'news_comments_id' => 8,
            ],
            [
                'customer_id' => 1,
                'news_comments_id' => 8,
            ],
            [
                'customer_id' =>3,
                'news_comments_id' => 6,
            ],
            [
                'customer_id' => 3,
                'news_comments_id' => 4,
            ],
        ]);
    }
}
