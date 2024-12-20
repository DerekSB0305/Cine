<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('schedules', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('movie_id'); //Foranea 
            $table->foreign('movie_id')->references('id')->on('movies');
            $table->unsignedBigInteger('room_id'); //Foranea
            $table->foreign('room_id')->references('id')->on('rooms');
            $table->date('date');
            $table->time('time'); 
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('schedules');
    }
};
