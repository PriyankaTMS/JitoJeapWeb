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
        Schema::create('user_boughts', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->integer('item_id');
            $table->integer('status')->comment('0: Cart, 1: Bought');
            $table->double('price');
            $table->double('gst');
            $table->double('total_price');
            $table->string('payment_id')->nullable();
            $table->string('payment_status')->nullable();
            $table->string('payment_request_id')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('user_boughts');
    }
};
