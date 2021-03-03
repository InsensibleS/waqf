<?php


namespace Database\Seeders;


use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AboutPageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('about_pages')->insert([
            [
                'heading' => 'How do we work',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Malesuada velit, imperdiet aliquet eleifend. Turpis diam ornare pellentesque turpis erat. Egestas ultrices egestas quam amet malesuada nisl, metus sed quam. Placerat leo molestie et imperdiet turpis morbi donec vestibulum. Placerat ac tempus, orci, maecenas enim, viverra libero venenatis ut. Rutrum vitae diam purus cras tristique non consectetur. Integer amet, sed euismod at sed morbi nibh aenean. Fames diam massa ultricies amet, nulla duis lacus.',
            ]
        ]);
    }
}
