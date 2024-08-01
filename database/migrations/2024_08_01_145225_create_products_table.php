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
        

        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('sku', 50)->unique()->comment('Example: For a brand, medium-sized t-shirt, the SKU might be "CC-NIKE-M-001"');
            $table->string('name', 100);
            $table->text('description')->nullable();
            $table->string('brand', 50)->nullable();
            $table->string('gender'); 
            $table->string('size', 20)->comment('XS: Extra Small, S: Small, M: Medium, L: Large, XL: Extra Large, XXL: Double Extra Large');
            $table->decimal('price', 10, 2);
            $table->integer('stock_quantity');
            $table->timestamps(); 
            $table->softDeletes(); 
        });

        Schema::create('product_images', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('product_id');
            $table->string('image_url', 255);
            $table->boolean('is_primary')->default(false);
            $table->integer('display_order')->nullable();
            $table->timestamps(); 
            $table->foreign('product_id')->references('id')->on('products')->onDelete('cascade');
        });

        Schema::create('product_reviews', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('product_id');
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('order_id');
            $table->integer('rating')->comment('rating >= 1 AND rating <= 5');
            $table->string('title', 255)->nullable();
            $table->text('review_text')->nullable();
            $table->boolean('is_verified_purchase')->default(true);
            $table->boolean('is_approved')->default(false);
            $table->timestamps(); 
            $table->foreign('product_id')->references('id')->on('products');
            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('order_id')->references('id')->on('orders');
            $table->unique(['user_id', 'product_id', 'order_id']);
        });

        Schema::create('category', function (Blueprint $table) {
            $table->id();
            $table->string('name', 255);
            $table->text('description');
            $table->timestamp('created_at')->default(DB::raw('CURRENT_TIMESTAMP'));
            $table->timestamp('updated_at')->default(DB::raw('CURRENT_TIMESTAMP'));
        });

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
        Schema::dropIfExists('category');
        Schema::dropIfExists('product_images');
        Schema::dropIfExists('product_reviews');

    }
};
