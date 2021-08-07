<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class GreenOrder extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('green_order', function (Blueprint $table) {
            $table->id();
            $table->foreign('user_id')->references('id')->on('green_eco_friends');
            $table->boolean('dine_in');
            $table->foreign('takeaway_id')->references('id')->on('green_takeaway');
            $table->boolean('ordered');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('green_order');
    }
}
