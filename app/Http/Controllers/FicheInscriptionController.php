<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use App\Models\NouveauxBacheliers;
use App\Models\AnciensBacheliers; 
use PDF; // Assurez-vous d'importer le modèle approprié

class FicheInscriptionController extends Controller
{
    public function showImprimerFicheForm()
    {
        return view('imprimerfiche');
    }

    public function imprimerFiche(Request $request)
    {
        $validatedData = $request->validate([
            'contact' => 'required|string',
            'email' => 'required|email',
        ]);

        // Recherchez dans la table NouveauxBacheliers en utilisant les informations de contact et d'e-mail
        $nouveauBachelier = NouveauxBacheliers::where('contact', $validatedData['contact'])
            ->where('email', $validatedData['email'])
            ->first();

        // Si le candidat Nouveau Bachelier est trouvé, affichez la vue appropriée
        if ($nouveauBachelier) {
            // Chargez la vue de la fiche d'inscription avec les données du candidat
            $pdf = PDF::loadView('fichenb', compact('nouveauBachelier'));
            return $pdf->download('fiche_preinscriptionb.pdf');
        }

        // Sinon, recherchez dans la table AnciensBacheliers
        $ancienBachelier = AnciensBacheliers::where('contact', $validatedData['contact'])
            ->where('email', $validatedData['email'])
            ->first();

        // Si le candidat Ancien Bachelier est trouvé, affichez la vue appropriée
        if ($ancienBachelier) {
            // Chargez la vue de la fiche d'inscription avec les données du candidat
            $pdf = PDF::loadView('ficheab', compact('ancienBachelier'));
            return $pdf->download('fiche_preinscriptionab.pdf');
        }

        // Si aucun candidat correspondant n'est trouvé, redirigez avec un message d'erreur
        return redirect()->route('imprimerFicheForm')->with('error', 'Désolé votre compte n’existe pas merci de faire votre préinscription en ligne.');
    }


}
