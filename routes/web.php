<?php
use App\Models\Ville;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SearchController;

// Had l-code kiy-khddem l-page l-lowla mli t-dkhul l-site
Route::get('/', function () {
    $villes = Ville::all(); // Bach l-moteur y-lqa l-villes
    return view('recherche', compact('villes'));
})->name('rechercher');


Route::get('/search', [SearchController::class, 'search'])->name('search');