<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BookingSeeder extends Seeder
{
    public function run(): void
    {
=        $userIds = DB::table('users')->pluck('id')->toArray();
        $segmentIds = DB::table('segments')->pluck('id')->toArray();

        if (empty($userIds) || empty($segmentIds)) {
            $this->command->error('Khassak t-seeder Users o Segments qbel!');
            return;
        }

        for ($i = 0; $i < 20; $i++) {
            DB::table('bookings')->insert([
                'client_id'    => fake()->randomElement($userIds),
                'admin_id'     => fake()->optional(0.7)->randomElement($userIds), 
                'segment_id'   => fake()->randomElement($segmentIds),
                'status'       => fake()->randomElement(['pending', 'confirmed', 'cancelled']),
                'seatNum'      => fake()->numberBetween(1, 50),
                'is_completed' => fake()->boolean(20), // 20% ghadi ykoun completed
                'created_at'   => now(),
                'updated_at'   => now(),
            ]);
        }
    }
}