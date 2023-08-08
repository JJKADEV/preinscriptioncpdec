<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Http\Request;
use App\Models\NouveauxBacheliers; // Assurez-vous d'importer vos modèles
use App\Models\AnciensBacheliers;

class DashboardController extends Controller
{
    public function showBacheliersData()
    {
        $nouveauxBacheliers = NouveauxBacheliers::all();
        $anciensBacheliers = AnciensBacheliers::all();

        return view('dashboard', compact('nouveauxBacheliers', 'anciensBacheliers'));
        return redirect()->route('login'); // Ajoutez cette ligne pour rediriger vers la page de connexion
    }
}
