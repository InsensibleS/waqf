<?php


namespace Database\Seeders;


use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class NotificationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    DB::table('notifications')->insert([
        [
            'customer_id' => 1,
            'type_id' => 4,
            'description' => 'The news is waiting for you!',
            'created_at' => date('Y-m-d H:i:s')
        ],
        [
            'customer_id' => 2,
            'type_id' => 4,
            'description' => 'The news is waiting for you!',
            'created_at' => date('Y-m-d H:i:s')
        ],
        [
            'customer_id' => 3,
            'type_id' => 4,
            'description' => 'The news is waiting for you!',
            'created_at' => date('Y-m-d H:i:s')
        ],
     ]);
    }
}
