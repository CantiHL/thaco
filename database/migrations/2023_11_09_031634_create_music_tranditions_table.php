<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('music_tranditions', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('lyrics')->nullable();
            $table->string('mp3')->nullable();
            $table->string('mp4')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('music_tranditions');
    }
};
