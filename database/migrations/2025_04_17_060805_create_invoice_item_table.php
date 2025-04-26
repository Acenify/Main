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
        Schema::create('invoice_item', function (Blueprint $table) {
            $table->uuid('invoice_id');
            $table->uuid('item_id');
            $table->integer('quantity');
            $table->decimal('total_price', 10, 2);
            $table->timestamps();

            // Relasi dengan invoice dan item
            $table->foreign('invoice_id')->references('id')->on('invoices')->onDelete('cascade');
            $table->foreign('item_id')->references('id')->on('items')->onDelete('cascade');

            // Menambahkan kombinasi unique constraint untuk invoice_id dan item_id
            $table->primary(['invoice_id', 'item_id']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('invoice_item');
    }
};
