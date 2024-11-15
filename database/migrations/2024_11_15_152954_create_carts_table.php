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
        Schema::create('carts', function (Blueprint $table) {
            $table->bigIncrements('cartID')->primary();
            $table->unsignedBigInteger('userID');
            $table->unsignedBigInteger('productID');
            $table->integer('quantity');
            $table->integer('subtotal');
            $table->timestamps();

            // Add foreign key constraint
            $table->foreign('userID')
                ->references('userID')
                ->on('users');

            $table->foreign('productID')
                ->references('productID')
                ->on('products');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('carts');
    }
};