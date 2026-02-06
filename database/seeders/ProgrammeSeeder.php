<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class ProgrammeSeeder extends Seeder
{
    public function run(): void
    {
        $routeId = DB::table('routes')->first()->id ?? 1;
        
        
        $startDate = Carbon::now(); 

        
        foreach (range(0, 6) as $day) {
            $date = $startDate->copy()->addDays($day);

            DB::table('programmes')->insert([
                [
                    'date_depart'   => $date->format('Y-m-d'),
                    'heure_depart'  => '08:00:00',
                    'heure_arrivee' => '12:00:00',
                    'route_id'      => $routeId,
                    'created_at'    => now(),
                    'updated_at'    => now(),
                ],
                [
                    'date_depart'   => $date->format('Y-m-d'),
                    'heure_depart'  => '14:30:00',
                    'heure_arrivee' => '18:30:00',
                    'route_id'      => $routeId,
                    'created_at'    => now(),
                    'updated_at'    => now(),
                ]
            ]);
        }
    }
}

