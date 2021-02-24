<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGratuitsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('gratuits', function (Blueprint $table) {
            $table->id();
            $table->boolean('genre');
            $table->string('nomcomplet');
            $table->string('email')->unique();
            $table->integer('phone')->unique();
            $table->string('adresse');
            $table->date('date_naissance');
            $table->string('lieu_naissance');
            $table->integer('niveau_etude');
            $table->boolean('connaissance_informatique');
            $table->boolean('connaissance_programation');
            $table->string('module');
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
        Schema::dropIfExists('gratuits');
    }
}
