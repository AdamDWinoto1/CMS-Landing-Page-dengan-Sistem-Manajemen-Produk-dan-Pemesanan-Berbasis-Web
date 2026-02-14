<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
{
    Schema::create('products', function (Blueprint $table) {
    $table->id();
    $table->string('name');
    $table->text('description')->nullable();
    $table->unsignedBigInteger('category_id');
    $table->foreign('category_id')->references('id')->on('categories')->onDelete('cascade');
    $table->decimal('price', 15, 2);
    $table->integer('stock');
    $table->string('discount_type')->nullable();
    $table->decimal('discount_value', 15, 2)->nullable();
    $table->string('image')->nullable();
    $table->string('link')->nullable();
    $table->string('link_whatsapp')->nullable();
    $table->timestamps();
});
}

    public function down(): void {
        Schema::dropIfExists('products');
    }
};
