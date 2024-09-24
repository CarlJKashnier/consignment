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
        //
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::create('vendors', function (Blueprint $table) {
            $table->integer('order_id');
            $table->integer('billed');
            $table->string('product_id');
            $table->float('product_cost');
            $table->float('product_discount')->nullable();
            $table->string('product_commission')->nullable();
            $table->integer('owned_by_client_id');
            $table->integer('client_id');
            $table->timestamps();
            $table->string('location');
        });
    }
};
