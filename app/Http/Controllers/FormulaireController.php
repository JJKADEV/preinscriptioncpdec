<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\NouveauxBacheliers;
use App\Models\AnciensBacheliers;

class FormulaireController extends Controller
{
    public function nouveauxBacheliersForm()
    {
        return view('nouveaux_bacheliers'); // Renvoie la vue nouveaux_bacheliers.blade.php
    }

    public function anciensBacheliersForm()
    {
        return view('anciens_bacheliers'); // Renvoie la vue anciens_bacheliers.blade.php
    }

    public function inscriptionNouveauxBacheliers(Request $request)
    {
       
       
        $data = $request->validate([
            'nom' => 'required|string|max:255',
            'prenom' => 'required|string|max:255',
            'dateDeNaissance' => 'required|date',
            'lieuDeNaissance' => 'required|string|max:255',
            'nationalite' => 'required|string|max:255',
            'etablissementDorigine' => 'required|string|max:255',
            'contact' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'nomDuParent' => 'required|string|max:255',
            'prenomDuParent' => 'required|string|max:255',
            'contactDuParent' => 'required|string|max:255',
            'emailDuParent' => 'required|email|max:255',
            'adresseDuParent' => 'required|string|max:255',
            'ue' => 'required|string|max:255',
            'fichiers' => 'required|string|max:255',
            'etat' => 'required|string|max:255',
            'serie' => 'required|string|max:255',
            'moyenneAnnuelleFrancais' => 'required|numeric',
            'moyenneAnnuelleAnglais' => 'required|numeric',
            'moyenneAnnuelleMath' => 'required|numeric',
            'noteBacFrancais' => 'required|numeric',
            'noteBacAnglais' => 'required|numeric',
            'noteBacMath' => 'required|numeric',
            'moyenneGeneraleAnnuelle' => 'required|numeric',
            'totalPointBac' => 'required|numeric',
            'moyenneBac' => 'required|numeric',
        ]);

        // Enregistrer les données dans la table "nouveaux_bacheliers"
        NouveauxBacheliers::create($data);

        // Une fois que les données sont enregistrées, tu peux retourner la fiche d'inscription (si nécessaire)
        // return view('fiche_inscription')->with(['nom' => $data['nom'], 'prenom' => $data['prenom']]);
    }

    public function inscriptionAnciensBacheliers(Request $request)
    {
        $data = $request->validate([
            'nom' => 'required|string|max:255',
            'prenom' => 'required|string|max:255',
            'dateDeNaissance' => 'required|date',
            'lieuDeNaissance' => 'required|string|max:255',
            'nationalite' => 'required|string|max:255',
            'etablissementDorigine' => 'required|string|max:255',
            'contact' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'nomDuParent' => 'required|string|max:255',
            'prenomDuParent' => 'required|string|max:255',
            'contactDuParent' => 'required|string|max:255',
            'emailDuParent' => 'required|email|max:255',
            'adresseDuParent' => 'required|string|max:255',
            'ue' => 'required|string|max:255',
            'fichiers' => 'required|string|max:255',
            'etat' => 'required|string|max:255',
            'diplome' => 'required|string|max:255',
            'anneeDuDiplome' => 'required|string|max:255',
            'profession' => 'required|string|max:255',
            'ves' => 'required|string|max:255',
            'cours' => 'required|string|max:255',
        ]);

        // Enregistrer les données dans la table "anciens_bacheliers"
        AnciensBacheliers::create($data);

        // Une fois que les données sont enregistrées, tu peux retourner la fiche d'inscription (si nécessaire)
        // return view('fiche_inscription')->with(['nom' => $data['nom'], 'prenom' => $data['prenom']]);
    }
}
