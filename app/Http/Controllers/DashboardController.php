<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\NouveauxBacheliers;
use App\Models\AnciensBacheliers;

class DashboardController extends Controller
{
    public function showBacheliersData()
    {
        // Filtrer les nouveaux bacheliers dont le statut est vide
        $nouveauxBacheliers = NouveauxBacheliers::where('status', null)->get();
        $anciensBacheliers = AnciensBacheliers::where('status', null)->get();

        return view('dashboard', compact('nouveauxBacheliers', 'anciensBacheliers'));
        return redirect()->route('login');
    }
}
