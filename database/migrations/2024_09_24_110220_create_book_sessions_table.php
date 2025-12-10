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
        Schema::create('book_sessions', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id')->nullable();
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->unsignedBigInteger('rost_id')->nullable();
            $table->foreign('rost_id')->references('id')->on('users')->onDelete('cascade');
            $table->string('date')->nullable();
            $table->unsignedBigInteger('ts_id')->nullable();
            $table->foreign('ts_id')->references('id')->on('time_slots')->onDelete('cascade');
            $table->unsignedBigInteger('tab_id')->nullable();
            $table->foreign('tab_id')->references('id')->on('tables')->onDelete('cascade');
            $table->enum('status', [0, 1])->default(1);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('book_sessions');
    }
};
