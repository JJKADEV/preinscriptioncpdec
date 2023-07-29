<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\NouveauxBacheliers;
use Illuminate\Support\Facades\Storage;

class NouveauxBacheliersController extends Controller
{
    // Afficher la première étape du formulaire
    public function showFirstStepForm()
    {
        return view('nouveaux_bacheliers1');
    }

    // Traiter la soumission des données de la première étape du formulaire
    public function processFirstStepForm(Request $request)
    {
        $validatedData = $request->validate([
            'nom' => 'required|string|max:255',
            'prenom' => 'required|string|max:255',
            'dateDeNaissance' => 'required|date',
            'lieuDeNaissance' => 'required|string|max:255',
            'nationalite' => 'required|string|max:255',
            'contact' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'etablissementDorigine' => 'required|string|max:255',
            'serie' => 'required|string|max:255',
            'nomDuParent' => 'nullable|string|max:255',
            'prenomDuParent' => 'nullable|string|max:255',
            'contactDuParent' => 'nullable|string|max:255',
            'emailDuParent' => 'nullable|email|max:255',
            'adresseDuParent' => 'nullable|string|max:255',
            'ue' => 'required|array',
            'ue.*' => 'required|string',
        ]);

        // Stocker les données de la première étape dans la session
        session()->put('first_step_data', $validatedData);

        return redirect()->route('secondStepForm');
    }

    // Afficher la deuxième étape du formulaire
    public function showSecondStepForm()
    {
        // Vérifier si les données de la première étape existent dans la session
        if (session()->has('first_step_data')) {
            // Récupérer les données de la première étape depuis la session
            $firstStepData = session()->get('first_step_data');

            return view('nouveaux_bacheliers2', compact('firstStepData'));
        } else {
            // Rediriger vers la première étape du formulaire si les données n'existent pas
            return redirect()->route('firstStepForm');
        }
    }

    // Traiter la soumission des données de la deuxième étape du formulaire
    public function processSecondStepForm(Request $request)
    {
        // Vérifier si les données de la première étape existent dans la session
        if (session()->has('first_step_data')) {
            // Récupérer les données de la première étape depuis la session
            $firstStepData = session()->get('first_step_data');

            $validatedData = $request->validate([
                'moyenneAnnuelleFrancais' => 'required|numeric',
                'moyenneAnnuelleAnglais' => 'required|numeric',
                'moyenneAnnuelleMath' => 'required|numeric',
                'noteBacFrancais' => 'required|numeric',
                'noteBacAnglais' => 'required|numeric',
                'noteBacMath' => 'required|numeric',
                'moyenneGeneraleAnnuelle' => 'required|numeric',
                'moyenneBac' => 'required|numeric',
                'totalPointBac' => 'required|numeric',
                'typeannee' => 'required|string',
                'bulletinDuTrimestre1' => 'required_if:typeannee,t|file|mimes:jpeg,png,pdf',
                'bulletinDuTrimestre2' => 'required_if:typeannee,t|file|mimes:jpeg,png,pdf',
                'bulletinDuTrimestre3' => 'required_if:typeannee,t|file|mimes:jpeg,png,pdf',
                'releveDeNoteDuBacT' => 'required_if:typeannee,t|file|mimes:jpeg,png,pdf',
                'bulletinDuSemestre1' => 'required_if:typeannee,s|file|mimes:jpeg,png,pdf',
                'bulletinDuSemestre2' => 'required_if:typeannee,s|file|mimes:jpeg,png,pdf',
                'releveDeNoteDuBacS' => 'required_if:typeannee,s|file|mimes:jpeg,png,pdf',
                // (Règles de validation précédentes)
            ]);

            // Fusionner les données de la première étape avec les données de la deuxième étape
            $completeFormData = array_merge($firstStepData, $validatedData);

            // Transformer le tableau $ue en une chaîne séparée par des virgules
            if (isset($completeFormData['ue']) && is_array($completeFormData['ue'])) {
                $completeFormData['ue'] = implode(',', $completeFormData['ue']);
            }

            // Valider et stocker les fichiers
            $fileFields = [
                'bulletinDuTrimestre1',
                'bulletinDuTrimestre2',
                'bulletinDuTrimestre3',
                'releveDeNoteDuBacT',
                'bulletinDuSemestre1',
                'bulletinDuSemestre2',
                'releveDeNoteDuBacS',
            ];

            foreach ($fileFields as $fileField) {
                if ($request->hasFile($fileField)) {
                    $path = $request->file($fileField)->store('fichiers');
                    $completeFormData[$fileField] = $path;
                }
            }

            // Traiter les données complètes du formulaire et les enregistrer dans la base de données
            NouveauxBacheliers::create($completeFormData);

            // Effacer les données de la session car la soumission du formulaire est terminée
            session()->forget('first_step_data');

            // Rediriger vers une page de succès ou toute autre page appropriée
            return redirect()->route('successPage');
        } else {
            // Rediriger vers la première étape du formulaire si les données n'existent pas dans la session
            return redirect()->route('firstStepForm');
        }
    }

    // Ajouter d'autres méthodes du contrôleur, si nécessaire
}
