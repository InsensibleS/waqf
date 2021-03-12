<?php


namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class NotificationTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('notification_types')->insert([
            [
                'title' => 'New comment on your personal project page',
                'image' => 'images/notification-types/Vector.jpg',
            ],
            [
                'title' => 'Your payment has been received',
                'image' => 'images/notification-types/cishenia.jpg',
            ],
            [
                'title' => 'Congratulations New vote for your project!',
                'image' => 'images/notification-types/Vectorlike.jpg',
            ],
            [
                'title' => 'Fresh news added',
                'image' => 'images/notification-types/Vectornews.jpg',
            ],
            [
                'title' => 'New comment on the project page from your favorites',
                'image' => 'images/notification-types/Star.jpg',
            ],
            [
                'title' => 'Reminder: the end of the grant  competition in 20 days',
                'image' => 'images/notification-types/Vectorcup.png',
            ],
            [
                'title' => 'The project from your favorites has passed to the next stage of rhe grant',
                'image' => 'images/notification-types/Star.jpg',
            ],
            [
                'title' => 'Your comment has been blocked by the site administration',
                'image' => 'images/notification-types/Vector.jpg',
            ],
        ]);
    }
}
