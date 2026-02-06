<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Segment; 
use App\Models\Ville; 
use App\Models\Route; 
use App\Models\Programme; 

class SearchController extends Controller
{
   public function search(Request $request) 
{
    $departure = $request->input('departure');
    $arrival = $request->input('arrival');
    $date = $request->input('date'); 

    $villes = \App\Models\Ville::all();

    
    $programmes = \App\Models\Programme::with(['route.segments'])
        ->whereHas('route.segments', function ($q) use ($departure, $arrival) {
            $q->where('departure_city', $departure)
              ->where('arrival_city', $arrival);
        })
        ->when($date, function ($query, $date) {
            return $query->whereDate('date_depart', $date);
        })
        ->get();

    return view('recherche', compact('programmes', 'villes'));
}



}