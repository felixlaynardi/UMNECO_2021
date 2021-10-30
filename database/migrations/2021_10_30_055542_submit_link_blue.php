<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class SubmitLinkBlue extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('submit_link_blue', function (Blueprint $table) {
            $table->id();
            $table->string('link');
            $table->dateTime('created_at', $precision = 0)->default(DB::raw('CURRENT_TIMESTAMP'));
            $table->unsignedBigInteger('eco_friends_id');

            $table->foreign('eco_friends_id')->references('id')->on('eco_friends');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
