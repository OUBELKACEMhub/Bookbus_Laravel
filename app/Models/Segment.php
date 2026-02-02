<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Segment extends Model
{
    public $timestamps = false;
     protected $fillable = [
        'tarif',
        'bus_id',
        'departure_city',
        'arrival_city',
        'trajet_id',
        'departure_time',
    ];
}
