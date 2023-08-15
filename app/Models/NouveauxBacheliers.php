<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NouveauxBacheliers extends Model
{
    use HasFactory;

    protected $table = 'nouveaux_bacheliers'; // Le nom de la table dans la base de données

    protected $fillable = [
        'nom',
        'prenom',
        'dateDeNaissance',
        'lieuDeNaissance',
        'nationalite',
        'etablissementDorigine',
        'contact',
        'email',
        'nomDuParent',
        'prenomDuParent',
        'contactDuParent',
        'emailDuParent',
        'adresseDuParent',
        'ue',
        'fichiers',
        'etat',
        'serie',
        'moyenneAnnuelleFrancais',
        'moyenneAnnuelleAnglais',
        'moyenneAnnuelleMath',
        'noteBacFrancais',
        'noteBacAnglais',
        'noteBacMath',
        'moyenneGeneraleAnnuelle',
        'totalPointBac',
        'moyenneBac',
        'moyenneAdmission', // Ajouter cette ligne
        'status', // Ajouter cette ligne
    ];

    // Si tu as besoin de définir des relations avec d'autres modèles, tu peux le faire ici
}
