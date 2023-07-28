<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FormulaireController;


// Route pour afficher le formulaire d'inscription des nouveaux bacheliers
Route::get('/nouveaux_bacheliers', [FormulaireController::class, 'nouveauxBacheliersForm']);

// Route pour traiter l'inscription des nouveaux bacheliers (méthode POST)
Route::post('/nouveaux_bacheliers/inscription', [FormulaireController::class, 'inscriptionNouveauxBacheliers']);

// Route pour afficher le formulaire d'inscription des anciens bacheliers
Route::get('/anciens_bacheliers', [FormulaireController::class, 'anciensBacheliersForm']);

// Route pour traiter l'inscription des anciens bacheliers (méthode POST)
Route::post('/anciens_bacheliers/inscription', [FormulaireController::class, 'inscriptionAnciensBacheliers']);



