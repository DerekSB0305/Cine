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
        Schema::create('tickets', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('client_id'); //Foranea
            $table->foreign('client_id')->references('id')->on('clients');
            $table->unsignedBigInteger('schedule_id'); //Foranea
            $table->foreign('schedule_id')->references('id')->on('schedules');
            $table->string('seat', length: 20);
            $table->integer('price');
            $table->dateTime('reservation_date');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tickets');
    }
};
