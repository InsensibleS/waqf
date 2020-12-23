<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CustomerStatusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('customer_statuses')->insert([
            [
                'title' => 'Regular',
                'image' => '/images/statuses-logo/regular.svg',
                'description' => '1 vote with 1 rating point for any payment',
            ],
            [
                'title' => 'Silver',
                'image' => '/images/statuses-logo/silver.svg',
                'description' => '3 votes with 10 rating points for 100 dollars in the last 365 days'
            ],
            [
                'title' => 'Golden',
                'image' => '/images/statuses-logo/gold.svg',
                'description' => '5 votes with 10 rating points for 200 dollars in the last 365 days'
            ],
            [
                'title' => 'Diamond',
                'image' => '/images/statuses-logo/diamond.svg',
                'description' => '10 votes with 20 rating points for 1000 dollars in the last 365 days'
            ],
        ]);
    }
}
