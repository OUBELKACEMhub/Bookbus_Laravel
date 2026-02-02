<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Route;
use App\Models\Programme;

class ProgrammeSeeder extends Seeder
{


public function run(): void
{
    $routeId = Route::first()?->trajet_id;

    if ($routeId) {
        Programme::create([
            'jour_depart'   => 'Lundi',
            'heure_depart'  => '08:00:00',
            'heure_arrivee' => '12:00:00',
            'route_id'      => $routeId,
        ]);
        
        Programme::create([
            'jour_depart'   => 'Mardi',
            'heure_depart'  => '14:30:00',
            'heure_arrivee' => '18:30:00',
            'route_id'      => $routeId,
        ]);
    }
}
}