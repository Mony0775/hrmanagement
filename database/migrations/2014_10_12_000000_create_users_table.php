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
            $table->string('name');
            $table->string('first_name');
            $table->string('last_name');
            $table->unsignedBigInteger('job');
            $table->string('dob');
            $table->unsignedBigInteger('position');
            $table->string('staff_id')->unique();
            $table->unsignedBigInteger('role');
            $table->unsignedBigInteger('permission');
            $table->string('street')->nullable();
            $table->unsignedBigInteger('province');
            $table->unsignedBigInteger('district');
            $table->unsignedBigInteger('commune');
            $table->unsignedBigInteger('village');
            $table->integer('phone_number');
            $table->integer('attendance');
            $table->string('salary');
            $table->string('status');
            $table->string('leave')->nullable();
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->rememberToken();
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
