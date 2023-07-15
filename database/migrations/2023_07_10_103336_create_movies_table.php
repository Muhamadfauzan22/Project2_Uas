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
            $table->string('title');
            $table->string('poster');
            $table->unsignedBigInteger('genres_id');
            $table->text('synopsis');
            $table->date('release_date');
            $table->unsignedBigInteger('countries_id');
            $table->float('rating');
            $table->foreign('genres_id')->references('id')->on('genres');
            $table->foreign('countries_id')->references('id')->on('countries');
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
