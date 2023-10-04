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
        Schema::create('invoices', function (Blueprint $table) {
            $table->id();
            $table->integer('invoice_id');
            $table->integer('qty');
            $table->foreignId('users_id')->constrained('users');
            $table->foreignId('products_id')->constrained('products');
            $table->text('address');
            $table->double('price');
            $table->date('estimated_delivery_date');
            $table->foreignId('payment_methods_id')->constrained('payment_methods');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('invoices');
    }
};
