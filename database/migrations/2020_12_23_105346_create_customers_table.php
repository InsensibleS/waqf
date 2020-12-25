<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCustomersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('customers', function (Blueprint $table) {
            $table->id();
            $table->string('name', 255)->nullable();
            $table->string('email', 255)->nullable();
            $table->string('phone', 255)->nullable();
            $table->string('phone_verified_code', 50)->nullable();
            $table->timestamp('phone_verified_at')->nullable();
            $table->timestamp('sending_email_with_link')->nullable();
            $table->timestamp('sending_email_with_password')->nullable();
            $table->foreignId('status_id')->constrained('customer_statuses');
            $table->boolean('is_registered')->default(false);
            $table->string('registration_string', 30)->nullable();
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
        Schema::dropIfExists('customers');
    }
}
