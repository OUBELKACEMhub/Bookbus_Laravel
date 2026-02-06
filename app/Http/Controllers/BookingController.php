<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Programme;
use App\Models\Segment; 
use App\Models\Booking; 

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



  public function store(Request $request)
{
$segmentId = $request->segment_id;
$programmeId = $request->programme_id;
$cardName  = $request->card_name;

// $segment = Segment::findOrFail($segmentId);
// $programme = Programme::findOrFail($programmeId);

$booking = Booking::create([
        'client_id' => auth()->id(),
        'segment_id' => $segmentId,
        'date_reservation' => now() ,
        'statut' => 'Payé',
        'siege_numero'=>1,
        'is_completed'=>true,
    ]);   
    return redirect('/search');
}


public function index()
{
   
    $reservations = Booking::where('client_id', auth()->id())
        ->with('segment') 
        ->latest() 
        ->get();

    return view('index', compact('reservations'));
}

} 





// public function viewTicket($request){
    
// }


