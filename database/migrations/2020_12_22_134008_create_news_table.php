<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;

class CreateNewsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('news', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('title');
            $table->string('image');
            $table->text('description');
            $table->text('full_description');
            $table->dateTime('publication_date');
            $table->boolean('is_main')->default(false);
            $table->boolean('is_second')->default(false);
            $table->boolean('ban_comments')->default(false);
            $table->string('link', 25)->default(Str::random(20));
            $table->softDeletes();
        });

        DB::statement('ALTER TABLE news ADD FULLTEXT full(title, description)');
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('news');
    }
}
