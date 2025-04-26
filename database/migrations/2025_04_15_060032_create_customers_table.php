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
        Schema::create('customers', function (Blueprint $table) {
            $table->uuid('id')->primary(); // UUID sebagai primary key
            $table->string('name'); // Nama customer
            $table->string('email')->unique(); // Email customer
            $table->string('phone')->nullable(); // Nomor telepon customer
            $table->string('company_name')->nullable(); // Nama perusahaan (jika ada)
            $table->string('status')->default('pending'); // Status pembuatan website
            $table->string('website_type'); // Jenis website
            $table->text('template')->nullable(); // Preferensi desain
            $table->decimal('price', 10, 2)->nullable(); // Anggaran yang disediakan
            $table->string('city')->nullable()->after('address');
            $table->string('province')->nullable()->after('city');
            $table->string('postal_code')->nullable()->after('province');
            $table->string('country')->nullable()->after('postal_code');;
            $table->timestamps(); // Tanggal pembuatan dan pembaruan
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('customers');
    }
};
