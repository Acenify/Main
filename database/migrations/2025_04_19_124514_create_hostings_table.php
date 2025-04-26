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
        Schema::create('hostings', function (Blueprint $table) {
            $table->id();
            $table->uuid('customer_id');
            $table->string('domain_name');
            $table->string('hosting_provider')->nullable();
            $table->string('cpanel_url')->nullable();
            $table->string('username');
            $table->text('password');
            $table->date('expired_at')->nullable();
            $table->boolean('ssl_installed')->default(false);
            $table->boolean('is_active')->default(true);
            $table->boolean('transfer_requested')->default(false);
            $table->enum('transfer_status', ['none', 'requested', 'in_progress', 'completed'])->default('none');
            $table->text('notes')->nullable();
            $table->timestamps();

            $table->foreign('customer_id')->references('id')->on('customers')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('hostings');
    }
};
