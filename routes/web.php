<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NouveauxBacheliersController;
use App\Http\Controllers\AnciensBacheliersController;
use App\Http\Controllers\FicheInscriptionController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ResultatController;

// Route for displaying the first step of the nouveaux bacheliers form
Route::get('/nouveaux_bacheliers', [NouveauxBacheliersController::class, 'showFirstStepForm'])->name('firstStepForm');

// Route for processing the first step of the nouveaux bacheliers form (method POST)
Route::post('/nouveaux_bacheliers', [NouveauxBacheliersController::class, 'processFirstStepForm']);

// Route for displaying the second step of the nouveaux bacheliers form
Route::get('/nouveaux_bacheliers/inscription', [NouveauxBacheliersController::class, 'showSecondStepForm'])->name('secondStepForm');

// Route for processing the second step of the nouveaux bacheliers form (method POST)
Route::post('/nouveaux_bacheliers/inscription', [NouveauxBacheliersController::class, 'processSecondStepForm']);

//route Anciens Bacheliers
// Route for displaying the first step of the nouveaux bacheliers form
// Route for displaying the first step of the anciens bacheliers form
Route::get('/anciens_bacheliers', [AnciensBacheliersController::class, 'showFirstStepForm'])->name('anciensFirstStepForm');

// Route for processing the first step of the anciens bacheliers form (method POST)
Route::post('/anciens_bacheliers', [AnciensBacheliersController::class, 'processFirstStepForm']);

// Route for displaying the second step of the anciens bacheliers form
Route::get('/anciens_bacheliers/inscription', [AnciensBacheliersController::class, 'showSecondStepForm'])->name('anciensSecondStepForm');

// Route for processing the second step of the anciens bacheliers form (method POST)
Route::post('/anciens_bacheliers/inscription', [AnciensBacheliersController::class, 'processSecondStepForm']);




//route succes nouveaux bacheliers

Route::get('/success-page', function () {
    // Replace 'success_page' with the actual name of your success page view
    return view('success_page');
})->name('successPage');

//route succes anciens bachelier

Route::get('/success-pageanciens', function () {
    // Replace 'success_page' with the actual name of your success page view
    return view('success_pageanciens');
})->name('success_pageanciens');

Route::get('/imprimer-fiche', [FicheInscriptionController::class, 'showImprimerFicheForm'])->name('imprimerFicheForm');
Route::post('/imprimer-fiche', [FicheInscriptionController::class, 'imprimerFiche'])->name('imprimerFiche');
Auth::routes();







Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::middleware(['auth'])->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'showBacheliersData'])->name('dashboard');
    Route::post('/nouveaux-bacheliers/{id}/update-status', [NouveauxBacheliersController::class, 'updateStatus'])->name('nouveaux-bacheliers.update-status');
    Route::post('/anciens-bacheliers/{id}/update-status', [AnciensBacheliersController::class, 'updateStatus'])->name('anciens-bacheliers.update-status');
    Route::get('/liste-admis', [App\Http\Controllers\NouveauxBacheliersController::class, 'listeAdmis'])->name('liste-admis');
    Route::get('/liste-refuses', [App\Http\Controllers\NouveauxBacheliersController::class, 'listeRefuses'])->name('liste-refuses');
    Route::get('/liste-admisab', [App\Http\Controllers\AnciensBacheliersController::class, 'listeAdmis'])->name('liste-admisab');
    Route::get('/liste-refusesab', [App\Http\Controllers\AnciensBacheliersController::class, 'listeRefuses'])->name('liste-refusesab');

});


Route::get('/afficher-resultats', [ResultatController::class, 'afficherResultats'])->name('afficher-resultats');
Route::post('/afficher-resultats', [ResultatController::class, 'afficherResultats'])->name('afficher-resultats');