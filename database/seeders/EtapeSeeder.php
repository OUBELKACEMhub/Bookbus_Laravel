<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Etape;
use App\Models\Segment;
use App\Models\Route;
use App\Models\Gare;

class EtapeSeeder extends Seeder
{
    public function run(): void
    {
        
        $segment = Segment::first();
        $route = Route::first();
        $gares = Gare::limit(3)->get(); 

        if (!$segment || !$route || $gares->isEmpty()) {
            $this->command->error("create seeder Segments, Routes and Gares before");
            return;
        }

        
        $etapes = [
            [
                'ordre' => 1,
                'heure_passage' => '08:00:00',
                'segment_id' => $segment->id,
                'route_id' => $route->trajet_id, 
                'gare_id' => $gares[0]->id,
            ],
            [
                'ordre' => 2,
                'heure_passage' => '09:30:00',
                'segment_id' => $segment->id,
                'route_id' => $route->trajet_id,
                'gare_id' => $gares[1]->id,
            ],
            [
                'ordre' => 3,
                'heure_passage' => '11:00:00',
                'segment_id' => $segment->id,
                'route_id' => $route->trajet_id,
                'gare_id' => $gares[2]->id,
            ],
        ];

        foreach ($etapes as $etape) {
            Etape::create($etape);
        }
    }
}