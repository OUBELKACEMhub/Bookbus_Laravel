<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Segment; // N-importiw l'Model hna l'fouq
use App\Models\Ville;   // Khassna l'villes bach l'form y-bqa 3amer

class SearchController extends Controller
{
    public function search(Request $request) 
    {
        // 1. Récupération des données men $request
        $departure = $request->input('departure');
        $arrival = $request->input('arrival');
        $date = $request->input('date'); // Men l'hssan t-filteri hta b la date

        // 2. Recherche (Query)
        // Mazyan n-asta3mlo "when" ila bghina l'recherche t-koun flexible
        $trips = Segment::where('departure_city', $departure)
                    ->where('arrival_city', $arrival)
                    ->when($date, function ($query, $date) {
                        return $query->whereDate('departure_time', $date);
                    })
                    ->get();

        // 3. Récupérer les villes bach l'utilisateur y-qder y-dir recherche khra
        $villes = Ville::all();
                    
        // 4. Retourner la view (Smia khassha t-koun bhal l'fichier .blade.php)
        return view('recherche', compact('trips', 'villes'));
    }
}