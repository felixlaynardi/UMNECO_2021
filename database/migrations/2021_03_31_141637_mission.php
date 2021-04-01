<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Mission extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('mission_utopia', function (Blueprint $table) {
            $table->id("mission_utopia_id");
            $table->text('mission_desc');
        });

        Schema::create('mission_rise', function (Blueprint $table) {
            $table->id("mission_rise_id");
            $table->text('mission_desc');
        });

        Schema::create('mission_utile', function (Blueprint $table) {
            $table->id("mission_utile_id");
            $table->text('mission_desc');
        });

        Schema::create('mission_raconteur', function (Blueprint $table) {
            $table->id("mission_raconteur_id");
            $table->text('mission_desc');
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
