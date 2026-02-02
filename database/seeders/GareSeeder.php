<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Gare;
use App\Models\Ville;

class GareSeeder extends Seeder
{
    public function run(): void
    {
        // 1. Kan-jibo l-IDs dial l-villes li creeyna f VilleSeeder
        $casa = Ville::where('nom', 'Casablanca')->first();
        $rabat = Ville::where('nom', 'Rabat')->first();
        $marrakech = Ville::where('nom', 'Marrakech')->first();

        // 2. T-akkad belli l-villes kaynin bach may-t-bloquach l-code
        if (!$casa || !$rabat || !$marrakech) {
            $this->command->error('Khassak t-runi VilleSeeder lowel!');
            return;
        }

        $gares = [
            [
                'nom'      => 'Casa-Voyageurs',
                'adresse'  => 'Boulevard Ba Hmad, Belvédère',
                'ville_id' => $casa->id, // Relation m3a Ville
            ],
            [
                'nom'      => 'Rabat Agdal',
                'adresse'  => 'Avenue Mohamed V',
                'ville_id' => $rabat->id,
            ],
            [
                'nom'      => 'Gare Marrakech',
                'adresse'  => 'Place du 16 Novembre',
                'ville_id' => $marrakech->id,
            ],
        ];

        foreach ($gares as $gare) {
            Gare::create($gare);
        }
    }
}