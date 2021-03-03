<?php


namespace Database\Seeders;


use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CustomerLetterSeeder extends Seeder
{
    public function run()
    {
        DB::table('customer_letters')->insert([
            [
                'name'=>'Dante',
                'email'=>'dutsun@gmail.com',
                'description'=> 'Hi! When will the new functionality be released?',
                'created_at' => date('Y-m-d H:i:s'),
            ],
            [
                'name'=>'Uly',
                'email'=>'Uly@gmail.com',
                'description'=> 'Can I cooperate with you and place my own ads?',
                'created_at' => date('Y-m-d H:i:s'),
            ]
        ]);
    }
}
