<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Etape extends Model
{
    use HasFactory;

    protected $fillable = [
        'segment_id',
        'gare_id',
        'ordre',
        'heure_arrivee_prevue'
    ];

    
    public function segment()
    {
        return $this->belongsTo(Segment::class);
    }

    
    public function gare()
    {
        return $this->belongsTo(Gare::class);
    }
}