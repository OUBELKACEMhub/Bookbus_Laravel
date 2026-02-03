<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BookingController extends Controller
{
    public function create($id)
{
    
    return "Page de réservation pour le trajet n°: " . $id;
}
}
