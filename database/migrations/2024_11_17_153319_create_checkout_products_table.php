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
        Schema::create('checkout_products', function (Blueprint $table) {
            $table->unsignedBigInteger('productID');
            $table->unsignedBigInteger('userID');
            $table->integer('quantity');
            $table->integer('subtotal');
            $table->timestamps();

            // Add foreign key constraint
            $table->foreign('productID')
                ->references('productID')
                ->on('products');

            $table->foreign('userID')
                ->references('userID')
                ->on('users');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('checkout_products');
    }
};