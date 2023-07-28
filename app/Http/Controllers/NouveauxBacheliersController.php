<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NouveauxBacheliersController extends Controller
{
    // Show the first step of the form
    public function showFirstStepForm()
    {
        return view('nouveaux_bacheliers1');
    }

    // Handle the first step form data submission
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

        // Store the first step form data in session
        session()->put('first_step_data', $validatedData);

        return redirect()->route('secondStepForm');
    }

    // Show the second step of the form
    public function showSecondStepForm()
    {
        // Retrieve the first step data from session
        $firstStepData = session()->get('first_step_data');

        return view('nouveaux_bacheliers2', compact('firstStepData'));
    }

    // Handle the second step form data submission
    public function processSecondStepForm(Request $request)
    {

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
        ]);

        // Merge first step data from session with second step data
        $completeFormData = array_merge(session()->get('first_step_data'), $validatedData);

        dd($completeFormData);

        // Process the complete form data, for example, store in the database
        // Your code to store the data in the database goes here...

        // Clear the session data as the form submission is complete
        session()->forget('first_step_data');

        // Redirect to a success page or any other appropriate page
        return redirect()->route('successPage');
    }

    // Add other controller methods, if needed
}
