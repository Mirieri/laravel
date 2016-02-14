<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateServiceProvidersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('service_providers', function (Blueprint $table) {
            $table->increments('server_provider_id');
            $table->integer('user_details')->unique();// user details in user table
            $table->integer('role')->unique();// role details in role table
            $table->text('automobile');// automobiles ownership
            $table->boolean('active');// this column describe the activation of the driver to be shown
            $table->timestamps();
        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('service_providers');
    }
}
