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
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->float('subtotal',8,2);
            $table->float('total',8,2);
            $table->float('tax',8,2);
            $table->timestamps();
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('customer_info_id');
            $table->unsignedBigInteger('shipping_id');
            $table->unsignedBigInteger('discount_id')->nullable();

            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('customer_info_id')->references('id')->on('customer_infos');
            $table->foreign('shipping_id')->references('id')->on('shipping_methods');
            $table->foreign('discount_id')->references('id')->on('discounts');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('orders');
    }
};
