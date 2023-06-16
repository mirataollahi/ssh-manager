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
        Schema::create('sshes', function (Blueprint $table) {
            $table->id()->comment('The unique ID of the user');
            $table->string('name' , 255)->comment('The mame of the SSH server');
            $table->string('ip' , 20)->comment('The IP of SSH server');
            $table->string('username' , 255)->comment('The username of the SSH server');
            $table->string('password' , 255)->comment('The password of the SSH server');
            $table->integer('port')->default(22)->comment('The port of the SSH server');
            $table->string('domain' , 255)->comment('The domain address of the SSH server');
            $table->string('operation_system' , 255)->comment('The operation system of the SSH server');
            $table->string('reseller' , 255)->comment('The site reseller of the SSH server');
            $table->unsignedBigInteger('creator_id')->nullable()->comment('The user creator of the SSH server');
            $table->softDeletes()->comment('The soft delete column of the user');
            $table->timestamps();

            $table->foreign('creator_id')->references('id')->on('users')->restrictOnDelete()->cascadeOnUpdate();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sshes');
    }
};
