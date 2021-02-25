<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class HashtagSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('hashtags')->insert([
            [
                'title' => 'smile',
            ],
            [
                'title' => 'ilovemydog',
            ],
            [
                'title' => 'home',
            ],
            [
                'title' => 'style',
            ],
            [
                'title' => 'earth',
            ],
            [
                'title' => 'COV19'
            ],
            [
                'title' => 'health'
            ],
            [
                'title' => 'mask'
            ],
            [
                'title' => 'pandemic'
            ],
            [
                'title' => 'Africa'
            ],
            [
                'title' => 'technologies'
            ],
            [
                'title' => '#happy'
            ],
            [
                'title' => 'happy'
            ],
            [
                'title' => ' self-isolation'
            ],
        ]);
    }
}
