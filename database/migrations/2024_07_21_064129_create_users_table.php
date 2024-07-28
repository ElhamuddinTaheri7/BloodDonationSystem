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
            $table->string('email')->unique();
            $table->string('user_auth')->default('user');
            $table->string('deleted_at')->nullable();
            $table->string('user_image')->default('uploads/temp.jpg');
            $table->string('user_age')->default('0');
            $table->string('last_name')->default('not-set');
            $table->string('user_gender')->default('None');
            $table->string('user_phone')->default('not-set');
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
