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
            $this->command->error("Khass t-seeder Buses o Routes qbel ma t-dir Segments!");
            return;
        }

        // 2. Creeyi des segments dial t-test
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
            'departure_city' => 'Marrakech',
            'arrival_city' => 'Agadir',
            'trajet_id' => $trajetId,
            'departure_time' => now()->addDays(2),
        ]);
    }
}

