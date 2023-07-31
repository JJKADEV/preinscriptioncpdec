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
        Schema::create('anciens_bacheliers', function (Blueprint $table) {
            $table->id();
            $table->string('nom');
            $table->string('prenom');
            $table->date('dateDeNaissance');
            $table->string('lieuDeNaissance');
            $table->string('nationalite');
            $table->string('etablissementDorigine')->nullable();
            $table->string('contact');
            $table->string('email');
            $table->string('nomDuParent');
            $table->string('prenomDuParent');
            $table->string('contactDuParent');
            $table->string('emailDuParent');
            $table->string('adresseDuParent');
            $table->string('ue');
            $table->string('diplome')->default('choisir');
            $table->integer('anneeDuDiplome')->default(2023);; // Vous pouvez remplacer '2023' par une autre valeur par défaut si nécessaire
            $table->string('profession')->default('');
            $table->string('entreprise')->nullable();
            $table->string('ves')->default('');
            $table->string('cours')->default('');
            $table->string('fichiers')->default(''); // Ajouter la valeur par défaut
            $table->string('chemins_fichiers')->nullable(); // Ajouter ce champ pour stocker les chemins complets des fichiers
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('anciens_bacheliers');
    }
};
