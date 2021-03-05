<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGrantsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('grants', function (Blueprint $table) {
            $table->id();
            $table->string('title', 255);
            $table->date('start_date');
            $table->date('end_selection_projects');
            $table->date('start_moderation');
            $table->date('end_moderation');
            $table->date('start_qualification');
            $table->date('end_qualification');
            $table->date('start_semifinal');
            $table->date('end_semifinal');
            $table->date('start_final');
            $table->date('end_final');
            $table->date( 'start_summarizing');
            $table->date('end_date');
            $table->integer('publication_cost');
            $table->foreignId('grant_stage_id')->constrained('grant_stages');
            $table->integer('number_finalists');
            $table->integer('number_semifinalists');
            $table->integer('number_wins');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('grants');
    }
}
