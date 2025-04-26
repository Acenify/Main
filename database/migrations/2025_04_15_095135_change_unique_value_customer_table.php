<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::table('customers', function (Blueprint $table) {
            // Menghapus index unique lama jika ada
            $table->dropUnique(['email']);

            // Menambahkan unique index baru pada kolom email
            $table->string('email')->unique()->change();
        });
    }

    public function down()
    {
        Schema::table('customers', function (Blueprint $table) {
            // Menghapus unique index pada kolom email
            $table->dropUnique(['email']);

            // Mengembalikan kolom email tanpa unique (opsional)
            $table->string('email')->change();
        });
    }
};
