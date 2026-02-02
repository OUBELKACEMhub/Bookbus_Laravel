<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Booking;
use App\Models\User;
use App\Models\Segment;

class BookingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
       
        $clientIds = User::where('role', 'client')->pluck('id')->toArray();
        $segmentIds = Segment::pluck('id')->toArray();

        
        if (empty($clientIds) || empty($segmentIds)) {
            $this->command->error('Khassak t-seeder Users o Segments qbel ma t-dir Bookings!');
            return;
        }

        $bookings = [
            [
                'client_id'        => $clientIds[0],
                'segment_id'       => $segmentIds[0],
                'date_reservation' => now(),
                'statut'           => 'Confirmé', 
                'siege_numero'     => 12,
                'is_completed'     => false,
            ],
            [
                'client_id'        => $clientIds[1] ?? $clientIds[0],
                'segment_id'       => $segmentIds[0],
                'date_reservation' => now()->subDay(),
                'statut'           => 'Payé',
                'siege_numero'     => 15,
                'is_completed'     => true,
            ],
        ];

        foreach ($bookings as $booking) {
            Booking::create($booking);
        }
    }
}