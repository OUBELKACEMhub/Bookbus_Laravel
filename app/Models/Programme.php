<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Programme extends Model
{
    protected $fillable = ['jour_depart', 'heure_depart', 'heure_arrivee', 'route_id'];

    // Relation inverse m3a Route
    public function route() {
        return $this->belongsTo(Route::class, 'route_id', 'trajet_id');
    }

    // Relation m3a les Segments (1 Programme hasMany Segments)
    public function segments() {
        return $this->hasMany(Segment::class);
    }

    // Method f l-image
    public function isActive(): bool {
        // Logic t-testi biha wach l-programme kheddam daba
        return true; 
    }
}