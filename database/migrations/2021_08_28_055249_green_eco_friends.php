<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class GreenEcoFriends extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('green_eco_friends', function (Blueprint $table) {
            $table->id();
            $table->string('full_name');
            $table->string('email')->unique();
            $table->string('student_id')->unique()->nullable();
            $table->string('institution')->nullable();
            $table->string('major')->nullable();
            $table->string('generation')->nullable();
            $table->string('instagram_account')->unique();
            $table->string('line_id')->unique();
            $table->string('phone_number')->unique();
            $table->string('password');
            $table->boolean('is_internal');
            $table->boolean('dine_in')->nullable();
            $table->unsignedBigInteger('takeaway_id')->nullable();
            $table->foreign('takeaway_id')->references('id')->on('green_takeaway');
            $table->boolean('ordered')->nullable();
            $table->string('task_link')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('green_eco_friends');
    }
}
