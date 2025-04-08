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
        Schema::table('contenidos', function (Blueprint $table) {
            //
            $table->integer('id_categoria')->after('nombre');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('contenidos', function (Blueprint $table) {
            //
            $table->dropColumn('id_categoria');
        });
    }
};
