<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function search(Request $request) {
        $departure = $request->departure;
        $arrival = $request->arrival;
        
        // N-jibo l-نتائج mn table segments
        $trips = \App\Models\Segment::where('departure_city', $departure)
                    ->where('arrival_city', $arrival)
                    ->get();

        return view('trips.index', compact('trips', 'departure', 'arrival'));
    }
}
