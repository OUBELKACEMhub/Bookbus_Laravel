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
    Schema::table('programmes', function (Blueprint $table) {
        // 1. Beddel smya mn jour_depart l date_depart
        $table->renameColumn('jour_depart', 'date_depart');
    });

    Schema::table('programmes', function (Blueprint $table) {
        // 2. Beddel l-type l datetime (khassha t-dar f step bou7dha f ba3d l-versions)
        $table->dateTime('date_depart')->change();
    });
}

public function down(): void
{
    Schema::table('programmes', function (Blueprint $table) {
        // Rollback: Erje3 l-smya o l-type l-9dim
        $table->renameColumn('date_depart', 'jour_depart');
    });
    
    Schema::table('programmes', function (Blueprint $table) {
        // Hna khassek trje3 l-type l-9dim (matalan string wala date)
        $table->string('jour_depart')->change(); 
    });
}
};
