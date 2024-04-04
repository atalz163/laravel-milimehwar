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
        Schema::create('our_stories', function (Blueprint $table) {
            $table->id();
            $table->foreignId('language_id')->constrained();
            $table->foreignId('item_id')->constrained();
            $table->foreignId('user_id')->constrained();
            $table->string('title', 2048);
            $table->string('thumbnail', 2048)->nullable();
            $table->longText('body');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('our_stories');
    }
};
