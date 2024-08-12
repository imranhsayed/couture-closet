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
            $table->string('sku', 50)->unique()->nullable(false)->comment('Example: For a brand, medium-sized t-shirt, the SKU might be "CC-NIKE-M-001"');
            $table->string('name', 100)->nullable(false);
            $table->text('description');
            $table->decimal('price', 10, 2);
            $table->integer('stock_quantity');
            $table->timestamp('created_at')->useCurrent();
            $table->timestamp('updated_at')->useCurrent()->useCurrentOnUpdate();
            $table->softDeletes();
        });

        Schema::create('product_images', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('product_id')->nullable(false);
            $table->string('image_url')->nullable(false);
            $table->boolean('is_primary')->default(false);
            $table->integer('display_order');
            $table->timestamp('created_at')->useCurrent();
            $table->timestamp('updated_at')->useCurrent()->useCurrentOnUpdate();
            $table->foreign('product_id')->references('id')->on('products')->onDelete('cascade');
        });

        Schema::create('product_reviews', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('product_id')->nullable(false);
            $table->unsignedBigInteger('user_id')->nullable(false);
            $table->unsignedBigInteger('order_id')->nullable(false);
            $table->integer('rating')->nullable(false)->comment('rating >= 1 AND rating <= 5');
            $table->string('title');
            $table->text('review_text');
            $table->boolean('is_verified_purchase')->default(true);
            $table->boolean('is_approved')->default(false);
            $table->timestamp('created_at')->useCurrent();
            $table->timestamp('updated_at')->useCurrent()->useCurrentOnUpdate();
            $table->foreign('product_id')->references('id')->on('products');
            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('order_id')->references('id')->on('orders');
            $table->unique(['user_id', 'product_id', 'order_id']);
        });

        Schema::create('category', function (Blueprint $table) {
            $table->id();
            $table->string('name')->nullable(false);
            $table->string('value')->nullable(false);
            $table->text('description');
            $table->timestamp('created_at')->useCurrent();
            $table->timestamp('updated_at')->useCurrent()->useCurrentOnUpdate();
        });

        Schema::create('product_categories', function (Blueprint $table) {
            $table->unsignedBigInteger('category_id')->nullable(false);
            $table->unsignedBigInteger('product_id')->nullable(false);
            $table->timestamp('created_at')->useCurrent();
            $table->timestamp('updated_at')->useCurrent()->useCurrentOnUpdate();
            $table->softDeletes();
            $table->foreign('category_id')->references('id')->on('category');
            $table->foreign('product_id')->references('id')->on('products');
        });

        Schema::create('order_items', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('order_id')->nullable(false);
            $table->unsignedBigInteger('product_id')->nullable(false);
            $table->unsignedBigInteger('quantity')->nullable(false);
            $table->string('size')->nullable(false);
            $table->decimal('unit_price', 10, 2)->nullable(false);
            $table->decimal('line_price', 10, 2)->nullable(false);
            $table->foreign('order_id')->references('id')->on('orders')->onDelete('cascade');
            $table->foreign('product_id')->references('id')->on('products')->onDelete('restrict');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0');
        Schema::dropIfExists('products');
        Schema::dropIfExists('category');
        Schema::dropIfExists('product_images');
        Schema::dropIfExists('product_reviews');
        Schema::dropIfExists('product_categories');
        DB::statement('SET FOREIGN_KEY_CHECKS=1');
    }
};
