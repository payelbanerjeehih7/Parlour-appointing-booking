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
        Schema::create('parlours', function (Blueprint $table) {
            $table->string('name');
            $table->string('email');
            $table->string('password');
            $table->bigInteger('phone');
            $table->string('service');
            $table->string('date');
            $table->string('time');
            $table->string('comment');
            $table->string('image');
            $table->string('user');
            $table->string('auth');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('parlours');
    }
};
