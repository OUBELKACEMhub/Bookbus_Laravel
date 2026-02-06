<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Route extends Model
{
    protected $primaryKey = 'trajet_id';
    
    public $timestamps = true;

    protected $fillable = [
        'nom',
        'description',
        
    ];

    
    public function segments(): HasMany
    {
        return $this->hasMany(Segment::class, 'trajet_id', 'trajet_id');
    }

    
    public function programmes(): HasMany 
    {
        return $this->hasMany(Programme::class, 'route_id', 'trajet_id');
    }
}