<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
public function up(): void
{
    Schema::create('programmes', function (Blueprint $table) {
        $table->id();
        $table->string('jour_depart'); // Matlan: "Lundi", "Quotidien"
        $table->time('heure_depart');
        $table->time('heure_arrivee');
        
        // Relation m3a Route (koul programme taba3 l-wahed l-route)
        $table->foreignId('route_id')->constrained('routes', 'trajet_id')->onDelete('cascade');
        
        $table->timestamps();
    });
}
public function down(): void
    {
        Schema::dropIfExists('programmes');
    }
};

