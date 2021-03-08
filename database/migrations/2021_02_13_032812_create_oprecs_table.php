<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOprecsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('oprecs', function (Blueprint $table) {
            $table->id();
            $table->string('team');
            $table->string('fullname');
            $table->integer('nim');
            $table->string('faculty');
            $table->string('major');
            $table->integer('classyear');
            $table->string('place_of_birth');
            $table->string('birthdate');
            $table->string('instagram');
            $table->string('line');
            $table->string('phonenumber');
            $table->string('email');
            $table->string('photo');
            $table->string('experience');
            $table->string('about');
            $table->string('why');
            $table->string('division');
            $table->string('subdiv');
            $table->string('question1');    
            $table->string('question2');
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
        Schema::dropIfExists('oprecs');
    }
}
