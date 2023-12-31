<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('nouveaux_bacheliers', function (Blueprint $table) {
            $table->id();
            $table->string('nom');
            $table->string('prenom');
            $table->date('dateDeNaissance');
            $table->string('lieuDeNaissance');
            $table->string('nationalite');
            $table->string('etablissementDorigine');
            $table->string('contact');
            $table->string('email');
            $table->string('nomDuParent');
            $table->string('prenomDuParent');
            $table->string('contactDuParent');
            $table->string('emailDuParent');
            $table->string('adresseDuParent');
            $table->string('ue');
            $table->string('etat')->default('');
            $table->string('serie');
            $table->float('moyenneAnnuelleFrancais');
            $table->float('moyenneAnnuelleAnglais');
            $table->float('moyenneAnnuelleMath');
            $table->float('noteBacFrancais');
            $table->float('noteBacAnglais');
            $table->float('noteBacMath');
            $table->float('moyenneGeneraleAnnuelle');
            $table->float('totalPointBac');
            $table->float('moyenneBac');
            $table->string('fichiers')->default(''); // Ajouter la valeur par défaut
            $table->string('chemins_fichiers')->nullable(); // Ajouter ce champ pour stocker les chemins complets des fichiers
            $table->float('moyenneAdmission')->nullable(); // Ajouter la colonne moyenneAdmission
            $table->string('status')->default(''); // Ajouter la colonne status
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('nouveaux_bacheliers');
    }
};