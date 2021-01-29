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
            CustomerStatusSeeder::class,
            NewsTableSeeder::class,
            MainPageAttributeSeeder::class,
            CountrySeeder::class,
            ProjectStatusSeeder::class,
            GrantStagesSeeder::class,
            HashtagSeeder::class,
            GrantSeeder::class,
            CustomerSeeder::class,
            SocialAccountSeeder::class,
            ProjectSeeder::class,
            NewsHashtagSeeder::class,
            NewsHashtagForNewsSeeder::class,
        ]);
    }
}
