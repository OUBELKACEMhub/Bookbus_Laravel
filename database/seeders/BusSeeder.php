<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $statuses = ['Disponible', 'En maintenance', 'En route'];
        
        for ($i = 0; $i < 10; $i++) {
            DB::table('buses')->insert([
                
                'matricule' => fake()->unique()->numberBetween(1000, 99999) . '|' . fake()->randomElement(['A', 'B', 'D', 'H']) . '|' . fake()->numberBetween(1, 80),
                'capacite' => fake()->randomElement([30, 45, 50, 60]), 
                'status' => fake()->randomElement($statuses),
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}