<?php


namespace Database\Seeders;


use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TeamMemberSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('team_members')->insert([
            [
                'name' => 'Savannah Nguyen',
                'photo' => 'team/Team1.jpg',
            ],
            [
                'name' => 'Devon Lane',
                'photo' => 'team/Team2.jpg',
            ],
            [
                'name' => 'Jenny Wilson',
                'photo' => 'team/Team3.png',
            ],
            [
                'name' => 'Leslie Alexander',
                'photo' => 'team/Team4.png',
            ],
            [
                'name' => 'Darrell Steward',
                'photo' => 'team/Team5.png',
            ],
        ]);
    }
}
