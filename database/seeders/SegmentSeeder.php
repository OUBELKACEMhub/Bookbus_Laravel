<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Bus;
use App\Models\Route;

class SegmentSeeder extends Seeder
{
    public function run(): void
    {
        $busIds = DB::table('buses')->pluck('id')->toArray();
        $trajetIds = DB::table('routes')->pluck('trajet_id')->toArray();

        if (empty($busIds) || empty($trajetIds)) {
            $this->command->info('Khassak t-seeder buses o routes qbel mat-runi hada!');
            return;
        }

        foreach ($busIds as $busId) {
            DB::table('segments')->insert([
                'bus_id'         => $busId,
                'trajet_id'      => fake()->randomElement($trajetIds),
                'departure_city' => fake()->city(),
                'arrival_city'   => fake()->city(),
                'departure_time' => fake()->dateTimeBetween('now', '+1 week'),
                'created_at'     => now(),
                'updated_at'     => now(),
            ]);
        }
    }
}