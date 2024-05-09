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
        Schema::create('online_registerations', function (Blueprint $table) {
            $table->id();
            $table->string('full_name');
            $table->string('father_name');
            $table->string('grand_father_name');
            $table->enum('gender', ['male', 'female']);
            $table->enum('marital_status', ['single', 'married'])->nullable();
            $table->string('blood_group')->nullable();
            $table->string('friend_number')->nullable();
            $table->string('mobile')->require;
            $table->string('email')->nullable();
            $table->string('province');
            $table->string('village');
            $table->string('district');
            $table->string('current_address')->nullable();
            $table->string('current_job')->nullable();
            $table->string('languages')->nullable();
            $table->string('mother_tounge');
            $table->string('education_level');
            $table->string('talent')->nullable();
            $table->boolean('approved')->default(false);
            $table->timestamps();
        });
    }

  

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('online_registerations');
    }
};
