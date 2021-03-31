<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class EcoFriends extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('eco_friends', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('student_id')->unique();
            $table->string('email')->unique();
            $table->string('major');
            $table->string('generation');
            $table->string('instagram_account')->unique();
            $table->string('line_id')->unique();
            $table->string('phone_number')->unique();
            $table->string('password');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('eco_friends');
    }
}
