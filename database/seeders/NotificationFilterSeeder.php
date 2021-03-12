<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class NotificationFilterSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('notification_filters')->insert([
            [
                'title' => 'all',
            ],
            [
                'title' => 'news',
            ],
            [
                'title' => 'my projects',
            ],
            [
                'title' => 'my comments',
            ],
        ]);
    }
}
