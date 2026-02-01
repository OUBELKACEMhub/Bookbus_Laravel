<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class RouteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
       
        DB::table('routes')->insert([
            [
                'address' => '123 Rue de Casablanca, Maarif',
                'nom_trajet' => 'Trajet Express Casa-Rabat',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'address' => 'Avenue Mohammed V, Marrakech',
                'nom_trajet' => 'Navette Centre Ville',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);

      
        for ($i = 0; $i < 10; $i++) {
            DB::table('routes')->insert([
                'address' => fake()->address(),
                'nom_trajet' => 'Trajet ' . fake()->city(),
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}