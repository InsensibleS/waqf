<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CustomerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('customers')->insert([
            [
                'name' => 'Роман Белкин',
                'status_id' => 4,
                'is_registered' => true,
                'email' => 'r.bell.sirop@gmail.com',
                'avatar' => '/customer-photos/r.bell'
            ],
            [
                'name' => 'Waqf Fin',
                'status_id' => 5,
                'is_registered' => true,
                'email' => 'dwaqf@yandex.ru',
                'avatar' => '/customer-photos/dwaqf'
            ],
            [
                'name' => 'Alexandr ',
                'status_id' => 5,
                'is_registered' => true,
                'email' => 'alexandr.intern@softlex.pro',
                'avatar' => '/customer-photos/useravatar.png'
            ],
        ]);
    }
}
