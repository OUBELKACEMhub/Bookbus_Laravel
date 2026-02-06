<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Segment;
class Booking extends Model
{
   protected $fillable = [
        'client_id',
        'segment_id',
        'date_reservation', 
        'statut',
        'siege_numero',
        'is_completed',
    ];

    protected $casts = [
        'date_reservation' => 'datetime',
        'is_completed' => 'boolean', 
    ];


    public function segment()
{
    return $this->belongsTo(Segment::class);
}
}
