<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class BlueEcoFriends extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('blue_eco_friends', function (Blueprint $table) {
            $table->id();
            $table->string('full_name');
            $table->string('email')->unique();
            $table->string('student_id')->unique()->nullable();
            $table->string('faculty')->nullable();
            $table->string('major')->nullable();
            $table->string('generation')->nullable();
            $table->string('instagram_account')->unique();
            $table->string('line_id')->unique();
            $table->string('phone_number')->unique();
            $table->string('password');
            $table->timestamp('registration_time')->nullable();
            $table->string('task_link')->nullable();
            $table->timestamp('submission_time', $precision = 0)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('blue_eco_friends');
    }
}
