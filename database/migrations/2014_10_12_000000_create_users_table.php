<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

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
            $table->string('image')->nullable();
            $table->string('role')->default('user');
            $table->string('email')->unique();
            $table->string('password');
            $table->string('addr')->nullable();
            $table->string('mobile')->unique();
            $table->string('link')->nullable();
            $table->string('company')->nullable();
            $table->unsignedBigInteger('pt_id')->nullable();
            $table->foreign('pt_id')->references('id')->on('power_teams')->onDelete('cascade');
            $table->unsignedBigInteger('cat_id')->nullable();
            $table->foreign('cat_id')->references('id')->on('categories')->onDelete('cascade');
            $table->unsignedBigInteger('cap_id')->nullable();
            $table->foreign('cap_id')->references('id')->on('chapters')->onDelete('cascade');
            $table->string('chap_des')->nullable();
            $table->longText('usp')->nullable();
            $table->string('branches')->nullable();
            $table->string('exp')->nullable();
            $table->string('dream_r')->nullable();
            $table->longText('com_brief')->nullable();
            $table->timestamp('email_verified_at')->nullable();
            $table->enum('status', [0, 1])->default(1);
            $table->rememberToken();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
