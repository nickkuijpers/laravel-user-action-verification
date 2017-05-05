<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddUserActionVerification extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_action_verification', function (Blueprint $table) {
            $table->increments('id');
            $table->string('user_id');
            $table->ipAddress('user_ip');
            $table->string('action_type');
            $table->string('verify_hash');
            $table->longText('existing_data');
            $table->longText('new_data');
            $table->string('status')->nullable();
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
        Schema::drop('user_action_verification');
    }
}
