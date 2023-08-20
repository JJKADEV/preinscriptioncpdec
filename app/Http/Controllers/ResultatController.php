<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\NouveauxBacheliers;
use App\Models\AnciensBacheliers;

class ResultatController extends Controller
{
    public function afficherResultats(Request $request)
    {
        $searchTerm = $request->input('searchTerm');
        
        $anciensAdmis = AnciensBacheliers::where(function ($query) use ($searchTerm) {
            $query->where('email', 'LIKE', '%' . $searchTerm . '%')
                  ->orWhere('contact', 'LIKE', '%' . $searchTerm . '%');
        })
        ->where('status', 'admis')
        ->get();

        $nouveauxAdmis = NouveauxBacheliers::where(function ($query) use ($searchTerm) {
            $query->where('email', 'LIKE', '%' . $searchTerm . '%')
                  ->orWhere('contact', 'LIKE', '%' . $searchTerm . '%');
        })
        ->where('status', 'admis')
        ->get();

        $message = '';
        $nomComplet = '';
        
        if ($request->has('searchTerm')) { // Vérifier si le formulaire a été soumis
            if (count($anciensAdmis) > 0 || count($nouveauxAdmis) > 0) {
                if (count($anciensAdmis) > 0) {
                    $utilisateurAdmis = $anciensAdmis->first();
                    $nomComplet = $utilisateurAdmis->nom . ' ' . $utilisateurAdmis->prenom;
                } else {
                    $utilisateurAdmis = $nouveauxAdmis->first();
                    $nomComplet = $utilisateurAdmis->nom . ' ' . $utilisateurAdmis->prenom;
                }
        
                $message = 'Félicitations, ' . $nomComplet . ', vous êtes déclarés admis. Vous pouvez procéder maintenant à votre inscription au CPDEC. Pour tous renseignements, merci de contacter le : 0709542105';
            } else {
                $message = 'Désolé, votre dossier est en cours de traitement';
            }
            
            // Oublier le message de la session
            $request->session()->forget('message');
        }
        
        return view('resultat', [
            'anciensAdmis' => $anciensAdmis,
            'nouveauxAdmis' => $nouveauxAdmis,
            'message' => $message,
        ]);
    }
}
