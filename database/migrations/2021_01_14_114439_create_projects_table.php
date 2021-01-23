<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProjectsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('projects', function (Blueprint $table) {
            $table->id();
            $table->timestamp('created_at')->useCurrent();
            $table->timestamp('updated_at')->useCurrent();
            $table->foreignId('country_id')->constrained('countries');
            $table->foreignId('grant_id')->constrained('grants');
            $table->foreignId('status_id')->constrained('project_statuses');
            $table->foreignId('customer_id')->constrained('customers');
            $table->foreignId('grant_stage_id')->constrained('grant_stages');
            $table->string('title', '255');
            $table->text('description');
            $table->timestamp('publication_date')->nullable();
            $table->timestamp('disposal_date')->nullable();
            $table->string('image1','255');
            $table->string('image2','255')->nullable();
            $table->string('image3','255')->nullable();
            $table->string('image4','255')->nullable();
            $table->string('image5','255')->nullable();
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
        Schema::dropIfExists('projects');
    }
}
