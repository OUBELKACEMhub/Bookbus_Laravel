<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Route;

class RouteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $routes = [
            [
                'nom_trajet' => 'Axe Casa-Marrakech',
                'address'    => 'Autoroute A7, Maroc',
            ],
            [
                'nom_trajet' => 'Ligne Nord (Rabat-Tanger)',
                'address'    => 'Autoroute A1, Maroc',
            ],
            [
                'nom_trajet' => 'Axe Agadir-Marrakech',
                'address'    => 'Autoroute A7 Sud, Maroc',
            ],
        ];

        foreach ($routes as $route) {
            Route::create($route);
        }
    }
}