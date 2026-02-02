<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Bus;


class BusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $buses = [
            [
                'matricule' => '12345-A-01',
                'capacite'  => 50,
                'status'    => 'disponible',
            ],
            [
                'matricule' => '67890-B-07',
                'capacite'  => 30,
                'status'    => 'en_route',
            ],
            [
                'matricule' => '11223-D-15',
                'capacite'  => 50,
                'status'    => 'en_panne',
            ],
            [
                'matricule' => '44556-H-22',
                'capacite'  => 18,
                'status'    => 'disponible',
            ],
        ];

        foreach ($buses as $bus) {
            Bus::create($bus);
        }
    }
}