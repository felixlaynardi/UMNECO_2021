<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Progress extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('progress_utile', function (Blueprint $table) {
            $table->unsignedBigInteger('userid');
            $table->unsignedBigInteger("mission_utile_id");
            $table->boolean('status');
            $table->text('link');
            $table->date('date');

            $table->foreign('userid')->references('id')->on('eco_friends');
            $table->foreign('mission_utile_id')->references('mission_utile_id')->on('mission_utile');
        });

        Schema::create('progress_raconteur', function (Blueprint $table) {
            $table->unsignedBigInteger('userid');
            $table->unsignedBigInteger("mission_raconteur_id");
            $table->boolean('status');
            $table->text('link');
            $table->date('date');
            
            $table->foreign('userid')->references('id')->on('eco_friends');
            $table->foreign('mission_raconteur_id')->references('mission_raconteur_id')->on('mission_raconteur');
        });


        Schema::create('progress_rise', function (Blueprint $table) {
            $table->unsignedBigInteger('userid');
            $table->unsignedBigInteger("mission_rise_id");
            $table->boolean('status');
            $table->text('link');
            $table->date('date');
            
            $table->foreign('userid')->references('id')->on('eco_friends');
            $table->foreign('mission_rise_id')->references('mission_rise_id')->on('mission_rise');
        });

        Schema::create('progress_utopia', function (Blueprint $table) {
            $table->unsignedBigInteger('userid');
            $table->unsignedBigInteger("mission_utopia_id");
            $table->boolean('status');
            $table->text('link');
            $table->date('date');

            $table->foreign('userid')->references('id')->on('eco_friends');
            $table->foreign('mission_utopia_id')->references('mission_utopia_id')->on('mission_utopia');
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
