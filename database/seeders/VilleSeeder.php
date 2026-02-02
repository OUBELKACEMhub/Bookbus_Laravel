<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Ville;

class VilleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $villes = [
            ['nom' => 'Casablanca'],
            ['nom' => 'Rabat'],
            ['nom' => 'Marrakech'],
        ];

        foreach ($villes as $ville) {
            Ville::create($ville);
        }
    }
}  