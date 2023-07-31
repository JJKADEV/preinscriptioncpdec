<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\AnciensBacheliers;
use Illuminate\Support\Facades\Storage;

class AnciensBacheliersController extends Controller
{
    // Afficher la première étape du formulaire pour les anciens bacheliers
    public function showFirstStepForm()
    {
        return view('anciens_bacheliers1');
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
            'diplome' => 'required|string|max:255',
            'anneeDuDiplome' => 'required|integer',
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

        return redirect()->route('anciensSecondStepForm');
    }

    // Afficher la deuxième étape du formulaire
    public function showSecondStepForm()
    {
        // Vérifier si les données de la première étape existent dans la session
        if (session()->has('first_step_data')) {
            // Récupérer les données de la première étape depuis la session
            $firstStepData = session()->get('first_step_data');

            return view('anciens_bacheliers2', compact('firstStepData'));
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
    
            $rules = [
                // (Règles de validation précédentes)
                'ves' => 'required|max:255',
                'cours' => 'required|max:255',
                'profession' => 'required|max:255',
            ];
    
            if ($request->input('profession') === 'TRAVAILLEUR') {
                $rules['entreprise'] = 'required|string|max:255';
                $rules['etablissementDorigine'] = 'nullable|string|max:255';
            } elseif ($request->input('profession') === 'ETUDIANT') {
                $rules['entreprise'] = 'nullable|string|max:255';
                $rules['etablissementDorigine'] = 'required|string|max:255';
            }
    
            $validatedData = $request->validate($rules);
    
            // Fusionner les données de la première étape avec les données de la deuxième étape
            $completeFormData = array_merge($firstStepData, $validatedData);
    
            // Transformer le tableau $ue en une chaîne séparée par des virgules
            if (isset($completeFormData['ue']) && is_array($completeFormData['ue'])) {
                $completeFormData['ue'] = implode(',', $completeFormData['ue']);
            }
    
            // Valider et stocker les fichiers
            $fileFields = [
                'releveDeNoteDuBac',
                'autreDocument',
            ];
    
            foreach ($fileFields as $fileField) {
                if ($request->hasFile($fileField)) {
                    $path = $request->file($fileField)->store('fichiers_anciens');
                    $completeFormData[$fileField] = $path;
                }
            }
    
            // Traiter les données complètes du formulaire et les enregistrer dans la base de données
            AnciensBacheliers::create($completeFormData);
    
            // Effacer les données de la session car la soumission du formulaire est terminée
            session()->forget('first_step_data');
    
            // Rediriger vers une page de succès ou toute autre page appropriée
            return redirect()->route('success_pageanciens');
        } else {
            // Rediriger vers la première étape du formulaire si les données n'existent pas dans la session
            return redirect()->route('firstStepForm');
        }
    }
    


    // Ajouter d'autres méthodes du contrôleur, si nécessaire
}
