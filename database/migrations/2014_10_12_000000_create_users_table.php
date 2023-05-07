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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name')->nullable();
            $table->enum('gender', ['Male', 'Female'])->default('Male');
            $table->smallInteger('age')->nullable();
            $table->enum('marital_status', ['Single', 'Married', 'Divorced', 'Widowed', 'Other'])->default('Single');
            $table->string('id_number')->nullable()->unique();
            $table->string('phone')->nullable()->unique();
            $table->string('doctor')->nullable();
            $table->string('doctor_phone')->nullable();
            $table->float('height')->nullable();
            $table->float('weight')->nullable();
            $table->enum('blood', ['A+', 'A-', 'B+', 'B-', 'AB+', 'AB-', 'O+', 'O-'])->nullable();
            $table->string('caretaker_phone')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
