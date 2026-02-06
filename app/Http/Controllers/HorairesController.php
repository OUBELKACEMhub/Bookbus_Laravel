<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Programme; 

class HorairesController extends Controller
{
    public function index()
{
   
    $programmes = Programme::all(); 
    
    
    return view('horaires', compact('programmes'));
}
}
