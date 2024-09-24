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
        Schema::create('sales_orders', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('customer_id');
            $table->foreign('customer_id')->references('id')->on('leads')->onDelete('cascade');
            $table->tinyInteger('order_status')->nullable();
            $table->float('basic_amount', 8, 2)->default(0);
            $table->float('discount_amount', 8, 2)->default(0);
            $table->float('tax_amount', 8, 2)->default(0);
            $table->float('round_off', 8, 2)->default(0);
            $table->float('final_amount', 8, 2)->default(0);
            $table->unsignedBigInteger('created_by');
            $table->foreign('created_by')->references('id')->on('users')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sales_orders');
    }
};
