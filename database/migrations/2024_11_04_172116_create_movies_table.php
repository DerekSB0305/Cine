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
        Schema::create('movies', function (Blueprint $table) {
            $table->id();
            $table->string('title', length: 100);
            $table->unsignedBigInteger('genre_id')->nullable(); //Foranea
            $table->foreign('genre_id')->references('id')->on('genres')->onDelete('set null');
            $table->string('duration', length: 50);
            $table->unsignedBigInteger('classification_id')->nullable(); //Foranea
            $table->foreign('classification_id')->references('id')->on('classifications')->onDelete('set null');
            $table->string('synopsis', length: 200);
            $table->string('movie_img', length: 100);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('movies');
    }
};
