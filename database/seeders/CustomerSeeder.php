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
            //1
            [
                'name' => 'Роман Белкин',
                'status_id' => 4,
                'is_registered' => true,
                'email' => 'r.bell.sirop@gmail.com',
                'avatar' => 'customer-photos/r.bell'
            ],
            //2
            [
                'name' => 'Waqf Fin',
                'status_id' => 5,
                'is_registered' => true,
                'email' => 'dwaqf@yandex.ru',
                'avatar' => 'customer-photos/dwaqf'
            ],
            //3
            [
                'name' => 'Alexandr ',
                'status_id' => 5,
                'is_registered' => true,
                'email' => 'alexandr.intern@softlex.pro',
                'avatar' => 'customer-photos/useravatar.png'
            ],
            //4
            [
                'name' => 'Abraham Ben',
                'status_id' => 3,
                'is_registered' => true,
                'email' => 'koskin@gmail.com',
                'avatar' => 'customer-photos/4.jpg'
            ],
            //5
            [
                'name' => 'Adam Vanetson',
                'status_id' => 5,
                'is_registered' => true,
                'email' => 'pandora_one@gmail.com',
                'avatar' => 'customer-photos/5.jpg'
            ],
            //6
            [
                'name' => 'Benjamin Frances',
                'status_id' => 2,
                'is_registered' => true,
                'email' => 'Ben_workn@gmail.com',
                'avatar' => 'customer-photos/6.jpeg'
            ],
            //7
            [
                'name' => 'Austin Qunea',
                'status_id' => 4,
                'is_registered' => true,
                'email' => 'first_Qunea@gmail.com',
                'avatar' => 'customer-photos/7.jpg'
            ],
            //8
            [
                'name' => 'Daisy Ben',
                'status_id' => 3,
                'is_registered' => true,
                'email' => 'Daisy@gmail.com',
                'avatar' => 'customer-photos/8.jpg'
            ],
            //9
            [
                'name' => 'Erin Vanetson',
                'status_id' => 2,
                'is_registered' => true,
                'email' => 'Erin@gmail.com',
                'avatar' => 'customer-photos/9.jpg'
            ],
            //10
            [
                'name' => 'Eren Eger',
                'status_id' => 2,
                'is_registered' => true,
                'email' => 'Erenn@gmail.com',
                'avatar' => 'customer-photos/10.jpg'
            ],
            //11
            [
                'name' => 'Mikassa Akerman',
                'status_id' => 3,
                'is_registered' => true,
                'email' => 'Akerman@gmail.com',
                'avatar' => 'customer-photos/11.jpeg'
            ],
            //12
            [
                'name' => 'Boa Hencoc',
                'status_id' => 2,
                'is_registered' => true,
                'email' => 'Ervin@gmail.com',
                'avatar' => 'customer-photos/12.jpg'
            ],
            //13
            [
                'name' => 'Ervin Mc.Kenly',
                'status_id' => 4,
                'is_registered' => true,
                'email' => 'Kenly.com',
                'avatar' => 'customer-photos/13.jpg'
            ],
            //14
            [
                'name' => 'Donald Duck',
                'status_id' => 5,
                'is_registered' => true,
                'email' => 'Duck_forave@gmail.com',
                'avatar' => 'customer-photos/14.jpg'
            ],
            //15
            [
                'name' => 'Anna Mock',
                'status_id' => 2,
                'is_registered' => true,
                'email' => 'Mock@gmail.com',
                'avatar' => 'customer-photos/15.jpg'
            ],
        ]);
    }
}
