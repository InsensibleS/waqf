<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class GrantStagesUpdatesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('grant_stages_updates', function (Blueprint $table) {
            $table->id();
            $table->string('updates_grants_id');
            $table->timestamp('start_process')->useCurrent();
            $table->timestamp('end_process')->useCurrent();
            $table->boolean('is_successful')->default(true);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('grant_stages_updates');
    }
}
