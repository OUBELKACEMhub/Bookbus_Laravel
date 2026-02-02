<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Bus extends Model
{
    
 protected $fillable = [
        'matricule',
        'capacite',
        'statut',
    ];


    public function segments()
    {
        return $this->hasMany(Segment::class);
    }

    public function programmes()
    {
        return $this->hasMany(Programme::class);
    }
}
