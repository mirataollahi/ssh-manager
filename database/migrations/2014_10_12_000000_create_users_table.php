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
            $table->id()->comment('the unique ID of user');
            $table->string('name')->comment('The username of the user');
            $table->string('username')->unique()->comment('The name of the user');
            $table->string('email')->unique()->nullable()->comment('The email of the user');
            $table->timestamp('email_verified_at')->nullable()->comment('The user email verified date time');
            $table->string('password')->nullable()->comment('The hashed password of the user');
            $table->enum('role' , ['admin' , 'super_admin'])->default('admin')->comment('The role and access of the user');
            $table->softDeletes()->comment('The soft delete column of the user');
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
