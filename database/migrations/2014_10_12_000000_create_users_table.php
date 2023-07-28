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
            $table->string('ktpId');
            $table->string('email')->unique();
            $table->string('phoneNumber');
            $table->string('userName')->unique();
            $table->string('loginPassword');
            $table->string('confirmationPassword');
            $table->integer('gender')->default('1');
            $table->date('birthDate');
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
