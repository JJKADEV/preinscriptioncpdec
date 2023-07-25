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
            $table->string('etablissementDorigine');
            $table->string('contact');
            $table->string('email');
            $table->string('nomDuParent');
            $table->string('prenomDuParent');
            $table->string('contactDuParent');
            $table->string('emailDuParent');
            $table->string('adresseDuParent');
            $table->string('ue');
            $table->string('fichiers');
            $table->string('etat');
            $table->string('diplome');
            $table->string('anneeDuDiplome');
            $table->string('profession');
            $table->string('ves');
            $table->string('cours');
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
