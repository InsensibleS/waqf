<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MainPageAttributeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('main_page_attributes')->insert([
            [
                'title' => 'We are Digital WAQF',
                'description' => "We develop a modern economy and help innovative projects to get a grant\nYou can become our sponsor and support the best participant right now",
                'footer_email' => 'info@waqf.com',
                'footer_address' => '3, Поклонная улица, Башня C, офис 3.01, Москва 121170, Россия',
            ],
        ]);
    }
}
