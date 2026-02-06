<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Programme;
use App\Models\Segment; 

class BookingController extends Controller
{
 

public function checkout(Request $request,$segment_id, $programme_id)
{
    $segment = Segment::findOrFail($segment_id);
    $programme = Programme::findOrFail($programme_id);
    $passengerCount = $request->query('passengers', 1);
    $totalPrice = $segment->tarif * $passengerCount;
    
    return view('cart', compact('segment', 'programme','passengerCount', 'totalPrice'));
}
}
