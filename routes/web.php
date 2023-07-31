<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NouveauxBacheliersController;
use App\Http\Controllers\AnciensBacheliersController;

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