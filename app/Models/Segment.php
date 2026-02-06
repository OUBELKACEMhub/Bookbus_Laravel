<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

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

   
    public function route(): BelongsTo
    {
        return $this->belongsTo(Route::class, 'trajet_id', 'trajet_id');
    }

   
    public function bus(): BelongsTo
    {
        return $this->belongsTo(Bus::class);
    }

   
    public function etapes(): HasMany
    {
        return $this->hasMany(Etape::class);
    }

    public function programmes(): BelongsTo
    {
        return $this->belongsTo(Programme::class);
    }

   
    public function getFullSegmentAttribute(): string
    {
        return "{$this->departure_city} → {$this->arrival_city}";
    }

  
    public function listCities(): string
    {
        if ($this->route) {
            $cities = $this->route->segments->pluck('departure_city')->toArray();
            $lastSegment = $this->route->segments->last();
            if ($lastSegment) {
                $cities[] = $lastSegment->arrival_city;
            }
            return implode(' → ', $cities);
        }
        
        return $this->full_segment;
    }
}