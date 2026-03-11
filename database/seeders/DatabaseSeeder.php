<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {

      

        $this->call([
            UserSeeder::class,
            RouteSeeder::class,
            BusSeeder::class,
            SegmentSeeder::class,
            BookingSeeder::class,
            VilleSeeder::class,
            GareSeeder::class,
        ]);
    }
}