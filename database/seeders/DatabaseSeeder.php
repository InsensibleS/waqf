<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            RolesSeeder::class,
            UserSeeder::class,
            PartnerSeeder::class,
<<<<<<< HEAD
            CustomerStatusSeeder::class,
            NewsTableSeeder::class,
=======
            CustomerStatusSeeder::class
            NewsTableSeeder::class
>>>>>>> 17a8de8537cfe2be4e626fc8667b86373efcc3ef

        ]);
    }
}
