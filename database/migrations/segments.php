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
    Schema::create('segments', function (Blueprint $table) {
        $table->id(); // C'est le segment_id automatique
        
        // Correction ici : Change 'id' par 'bus_id'
        $table->foreignId('bus_id')->unique()->constrained('buses')->onDelete('cascade');
        
        $table->string('departure_city');
        $table->string('arrival_city');
        
        // Clé étrangère vers ton tableau 'routes' (trajet_id)
        $table->foreignId('trajet_id')->constrained('routes', 'trajet_id')->onDelete('cascade');
        
        $table->dateTime('departure_time');
        $table->timestamps();
    });
}

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('segments');
    }
};
