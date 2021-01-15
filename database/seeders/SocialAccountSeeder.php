<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SocialAccountSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('social_accounts')->insert([
            [
                'customer_id' => 1,
                'customer_id_by_provider' => '112680985525792316359',
                'provider' => 'google',
                'token' => 'ya29.a0AfH6SMAPqFrugUGGNYEVVBhuFGfGTc7-relJyQHvFDjPnHgpuCVwtZe3ldZ30cawic1G1EiqN6R-5yWfB0_P-jZOBd_0z…',
            ],
            [
                'customer_id' => 2,
                'customer_id_by_provider' => '102801351758908',
                'provider' => 'facebook',
                'token' => 'EAAGahwERhJQBAJaNu9R1EyJj0gXLdKN2RVzT0SLfhhIMriNVVjl9or1aIEnt7ZAM9nywiE7lJHEE3abZAZC6C7GJ5hyJ00ZCw7D',
            ],
        ]);
    }
}
