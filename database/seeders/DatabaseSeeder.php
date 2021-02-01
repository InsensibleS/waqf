<?php

namespace Database\Seeders;

use App\Nova\NewsComment;
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
            GrantStagesSeeder::class,
            HashtagSeeder::class,
            GrantSeeder::class,
            CustomerSeeder::class,
            NewsLikeSeeder::class,
            SocialAccountSeeder::class,
            ProjectStatusSeeder::class,
            ProjectSeeder::class,
            NewsCommentSeeder::class,
            NewsCommentDislikeSeeder::class,
            NewsCommentDislikeSeeder::class,
        ]);
    }
}
