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
        Schema::create('activation_fields', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('field_id');
            $table->string('title');
            $table->string('description', 2000)->nullable();
            $table->string('image')->nullable();
            $table->string('link');
            $table->string('active_in');
            $table->timestamps();
            $table->foreign('field_id')->references('id')->on('fields')->cascadeOnDelete();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('activation_fields');
    }
};
