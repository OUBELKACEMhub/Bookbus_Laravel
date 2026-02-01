<?php

namespace App\Models;

class Client extends User 
{
    // 1. Forceh ikhdem b-table users
    protected $table = 'users';

    // 2. Glooq lih l-khidma (Global Scope) 
    // Bach dima ila derti Admin::all() ijib ghir li 3ndhom role admin
    protected static function booted()
    {
        static::addGlobalScope('admin_only', function ($builder) {
            $builder->where('role', 'client');
        });
    }
}