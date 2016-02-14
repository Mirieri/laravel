<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRequestsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('requests', function (Blueprint $table) {
            $table->increments('request_id');
            $table->integer('user')->unique();// user details in user table
            $table->integer('server_provider')->unique();
            $table->boolean('request_status');// this column describe the activation of the driver to be shown
            $table->string('comments');
            $table->rememberToken();
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
       Schema::drop('requests');
    }
}
