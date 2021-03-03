<?php


namespace Database\Seeders;


use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProjectVoteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('project_votes')->insert([
            [
                'customer_id' => 1,
                'project_id' => 1,
                'customer_status_id' => 4,
                'number_rating_points' => 1,
                'created_at' => date('Y-m-d H:i:s')
            ],
            [
                'customer_id' => 2,
                'project_id' => 1,
                'customer_status_id' => 3,
                'number_rating_points' => 2,
                'created_at' => date('Y-m-d H:i:s')
            ],
            [
                'customer_id' => 3,
                'project_id' => 1,
                'customer_status_id' => 4,
                'number_rating_points' => 3,
                'created_at' => date('Y-m-d H:i:s')
            ],
        ]);
    }
}
