<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();

            $table->string('name');
            $table->foreignId('category_id')->constrained('categories')->onDelete('cascade');
            $table->foreignId('sub_category_id')->constrained('sub_categories')->onDelete('cascade');
            $table->foreignId('brand_id')->constrained('brands')->onDelete('cascade');
            $table->foreignId('supplier_id')->constrained('suppliers')->onDelete('cascade');

            $table->string('sku')->unique();
            $table->enum('size', ['S', 'M', 'L', 'XL'])->nullable();
            $table->string('color')->nullable();
            $table->string('material')->nullable();
            $table->enum('gender', ['Men', 'Women', 'Kids', 'Unisex'])->nullable();

            $table->decimal('purchase_price', 10, 2);
            $table->decimal('selling_price', 10, 2);

            $table->integer('purchase_quantity');
            $table->integer('stock_quantity');

            $table->string('image')->nullable();
            $table->enum('status', ['Active', 'Out of Stock', 'Discontinued'])->default('Active');

            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
