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
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('provincial_tax_rate_id');
            $table->timestamp('order_date')->default(DB::raw('CURRENT_TIMESTAMP'));
            $table->string('email', 255);
            $table->decimal('pst', 10, 2);
            $table->decimal('gst', 10, 2);
            $table->decimal('hst', 10, 2);
            $table->decimal('sub_amount', 10, 2);
            $table->decimal('total_amount', 10, 2);
            $table->text('shipping_address');
            $table->text('billing_address');
            $table->timestamps();
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
