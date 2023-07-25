<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AnciensBacheliers extends Model
{
    use HasFactory;

    protected $table = 'anciens_bacheliers'; // Le nom de la table dans la base de données

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
        'diplome',
        'anneeDuDiplome',
        'profession',
        'ves',
        'cours',
    ];

    // Si tu as besoin de définir des relations avec d'autres modèles, tu peux le faire ici
}
