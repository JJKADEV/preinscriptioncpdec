<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NouveauxBacheliersController;

// Route for displaying the first step of the nouveaux bacheliers form
Route::get('/nouveaux_bacheliers', [NouveauxBacheliersController::class, 'showFirstStepForm'])->name('firstStepForm');

// Route for processing the first step of the nouveaux bacheliers form (method POST)
Route::post('/nouveaux_bacheliers', [NouveauxBacheliersController::class, 'processFirstStepForm']);

// Route for displaying the second step of the nouveaux bacheliers form
Route::get('/nouveaux_bacheliers/inscription', [NouveauxBacheliersController::class, 'showSecondStepForm'])->name('secondStepForm');

// Route for processing the second step of the nouveaux bacheliers form (method POST)
Route::post('/nouveaux_bacheliers/inscription', [NouveauxBacheliersController::class, 'processSecondStepForm']);

// Route for displaying the formulaire d'inscription des anciens bacheliers (assuming it's already defined)
Route::get('/anciens_bacheliers', [FormulaireController::class, 'anciensBacheliersForm']);

// Route for processing the inscription des anciens bacheliers (assuming it's already defined)
Route::post('/anciens_bacheliers/inscription', [FormulaireController::class, 'inscriptionAnciensBacheliers']);

Route::get('/success-page', function () {
    // Replace 'success_page' with the actual name of your success page view
    return view('success_page');
})->name('successPage');
