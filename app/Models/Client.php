<?php

namespace App\Models;

class Client extends User 
{
  
    protected $table = 'users';

    
    protected static function booted()
    {
        static::addGlobalScope('client_only', function ($builder) {
            $builder->where('role', 'client');
        });
    }
    
   
    public function bookings()
    {
        return $this->hasMany(Booking::class, 'user_id');
    }
}