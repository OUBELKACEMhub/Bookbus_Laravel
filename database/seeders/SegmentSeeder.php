<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Segment;
use App\Models\Bus;
use App\Models\Route;

class SegmentSeeder extends Seeder
{
    public function run(): void
    {
        
        $busId = DB::table('buses')->first()?->id;
        $trajetId = DB::table('routes')->first()?->trajet_id; 

        if (!$busId || !$trajetId) {
            $this->command->error("if faut cree seedder de route et ville avant le cree sedder Segments!");
            return;
        }

        
        Segment::create([
            'bus_id' => $busId,
            'tarif'=> 100.00,
            'departure_city' => 'Casablanca',
            'arrival_city' => 'Marrakech',
            'trajet_id' => $trajetId,
            'departure_time' => now()->addDays(1),
        ]);

        Segment::create([
            'bus_id' => $busId,
            'tarif'=> 90.00,
            'departure_city' => 'Casablanca',
            'arrival_city' => 'Rabat',
            'trajet_id' => $trajetId,
            'departure_time' => now()->addDays(2),
        ]);

        Segment::create([
            'bus_id' => $busId,
            'tarif'=> 100.00,
            'departure_city' => 'Marrakech',
            'arrival_city' => 'Rabat',
            'trajet_id' => $trajetId,
            'departure_time' => now()->addDays(3),
        ]);

         Segment::create([
            'bus_id' => $busId,
            'tarif'=> 90.00,
            'departure_city' => 'Marrakech',
            'arrival_city' => 'agadir',
            'trajet_id' => $trajetId,
            'departure_time' => now()->addDays(4),
        ]);
        Segment::create([
            'bus_id' => $busId,
            'tarif'=> 90.00,
            'departure_city' => 'Safi',
            'arrival_city' => 'Casa',
            'trajet_id' => $trajetId,
            'departure_time' => now()->addDays(4),
        ]);
    }
}

