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
    // Kheddem ::table blast ::create
    Schema::table('segments', function (Blueprint $table) {
        $table->dropColumn('departure_time');
    });
}

public function down(): void
{
    Schema::table('segments', function (Blueprint $table) {
        // Darouri t-definir $table hna bach l-rollback ikhdem
        $table->time('departure_time')->nullable(); 
    });
}
};
