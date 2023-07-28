<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>CPDEC | Inscription nouveaux bacheliers 2022-2023</title>

    <!-- Font Icon -->
    <link rel="stylesheet"
        href="{{ asset('nouveaux_bachelier/fonts/material-icon/css/material-design-iconic-font.min.css') }}">

    <!-- Main css -->
    <link rel="stylesheet" href="{{ asset('nouveaux_bachelier/css/style.css') }}">


</head>

<body>
    <div class="banner">
        <img src="{{ asset('nouveaux_bachelier/images/banner.jpg') }}" alt="Banner Image">
    </div>
    <style>
        .banner {
            text-align: center;
            padding: 20px;
            background-color: transparent;
            border-radius: 10px;
            overflow: hidden;
        }

        .banner img {
            max-width: 100%;
            height: auto;
        }
    </style>
    <br>
    <!-- <style> 
    marquee {
        width: 100%;
        padding: 10px 0;
        background-color: lightblue;
    }
</style>
<marquee direction="scroll">Un texte défilant créé avec l'élément HTML Marquee et stylé avec les propriétés CSS.</marquee>
<br> -->
    <div class="main">
        @if(session('status'))
        <div class="alert alert-success">
            {{ session('status') }}
        </div>
        @endif
        <div class="container">
            <div class="signup-content">
                <div class="signup-img">
                    <img src="{{ asset('nouveaux_bachelier/images/signup-img.jpg') }}" alt="CPEDEC">
                </div>
                <div class="signup-form">
                    <form method="post" action="/nouveaux_bacheliers/inscription" name="formulaireab" id="formulaireab"
                        class="register-form">
                        @csrf
                        <h2>Identification (NOUVEAUX BACHELIERS)</h2>
                        <div class="form-row">
                            <div class="form-group">
                                <label for="nom" class="label">Nom<span class="ast">*</span></label><input type="text"
                                    name="nom" id="nom">
                            </div>
                            <div class="form-group">
                                <label for="prenom" class="label">Prénoms<span class="ast">*</span></label><input
                                    type="text" name="prenom" id="prenom">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group">
                                <label for="ddnaiss" class="label">Date de naissance<span
                                        class="ast">*</span></label><input type="date" name="dateDeNaissance"
                                    id="dateDeNaissance">
                            </div>
                            <div class="form-group">
                                <label for="lieunaiss" class="label">Lieu de naissance<span
                                        class="ast">*</span></label><input type="text" name="lieuDeNaissance"
                                    id="lieuDeNaissance">
                            </div>
                            <div class="form-group">
                                <label for="nationalite" class="label">Nationalité<span
                                        class="ast">*</span></label><input type="text" name="nationalite"
                                    id="nationalite">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group">
                                <label for="contact" class="label">Contact du candidat<span
                                        class="ast">*</span></label><input type="text" name="contact" id="contact">
                            </div>
                            <div class="form-group">
                                <label for="email" class="label">Email du candidat<span
                                        class="ast">*</span></label><input type="email" name="email" id="email">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group">
                                <label for="etablissementorg" class="label">&Eacute;tablissemnt d'origine<span
                                        class="ast">*</span></label>
                                <input type="text" name="etablissementDorigine" id="etablissementDorigine">
                            </div>
                            <div class="form-group">
                                <label for="serie" class="label">Série du bac<span class="ast">*</span></label>
                                <input type="text" name="serie" id="serie">
                            </div>
                        </div>


                        <div class="form-row">
                            <div class="form-group">
                                <label for="nomparent" class="label">Nom du parent</label>
                                <input type="text" name="nomDuParent" id="nomparent">
                            </div>
                            <div class="form-group">
                                <label for="prenomparent" class="label">Prénom du parent</label>
                                <input type="text" name="prenomDuParent" id="prenomparent">

                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group">
                                <label for="contactparent" class="label">Contact du parent</label>
                                <input type="text" name="contactDuParent" id="contactparent">
                            </div>
                            <div class="form-group">
                                <label for="emailparent" class="label">Email du parent</label>
                                <input type="email" name="emailDuParent" id="emailparent">
                            </div>
                            <div class="form-group">
                                <label for="adresseparent" class="label">Adresse du parent</label>
                                <input type="text" name="adresseDuParent" id="adresseparent">
                            </div>
                        </div>


                        <div class="choixdesue">
                            <hr>
                            <h2>Choix des UE</h2>
                            <div class="form-group">
                                <label for="select" class="label">Choisissez vos UE<span class="ast">*</span></label>
                                <div class="form-group">
                                    <select class="form-select" id="select" name="ue">
                                        <option value="">.............................................</option>
                                        <option value="115" id="115">&Eacute;conomie comptemporaine</option>
                                        <option value="118" id="118">Système d'informations et de gestion</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <div><label>UE choisies (<span id="nbUe"></span>)</label></div>
                                <div class="area" id="area">
                                    <div class="choix"><input type="hidden" value="111" name="ue[]">Fondamentaux du
                                        droit<span class="ast">*</span></div>
                                    <div class="choix"><input type="hidden" value="119" name="ue[]">Comptabilité<span
                                            class="ast">*</span></div>
                                </div>
                            </div>
                    </form>
                </div>
                <div>
                    <button id="bouton-precedent">Précédent</button>
                    <button id="bouton-suivant">Suivant</button>
                </div>
                <div id="deuxieme-partie">
                    <!-- Deuxième partie du formulaire -->
                    <div class="situation">
                        <form method="post" action="/nouveaux_bacheliers/inscription" name="formulaireab"
                            id="formulaireab" class="register-form" enctype="multipart/form-data">
                            @csrf
                            <hr>
                            <h2>RELEVÉ DE NOTES</h2>

                            <div>
                                <h2>Moyennes annuelles</h2>
                            </div>
                            <div class="row col3">
                                <div class="form-group">
                                    <label for="moyannfran" class="label">Français<span class="ast">*</span></label>
                                    <input type="number" name="moyenneAnnuelleFrancais" id="moyannfran">
                                </div>
                                <div class="form-group">
                                    <label for="moyannang" class="label">Anglais<span class="ast">*</span></label>
                                    <input type="number" name="moyenneAnnuelleAnglais" id="moyenneAnnuelleAnglais">
                                </div>
                                <div class="form-group">
                                    <label for="moyannmath" class="label">Mathématiques<span
                                            class="ast">*</span></label>
                                    <input type="number" name="moyenneAnnuelleMath" id="moyenneAnnuelleMath">
                                </div>
                            </div>
                            <div>
                                <h2>Notes du bac</h2>
                            </div>
                            <div class="row col3">

                                <div class="form-group">
                                    <label for="notebacfran" class="label">Français<span class="ast">*</span></label>
                                    <input type="number" name="noteBacFrancais" id="noteBacFrancais">
                                </div>
                                <div class="form-group">
                                    <label for="notebacang" class="label">Anglais<span class="ast">*</span></label>
                                    <input type="number" name="noteBacAnglais" id="noteBacAnglais">
                                </div>
                                <div class="form-group">
                                    <label for="notebacmath" class="label">Mathématiques<span
                                            class="ast">*</span></label>
                                    <input type="number" name="noteBacMath" id="noteBacMath">
                                </div>
                            </div>
                            <div>
                                <h2>Autres</h2>
                            </div>
                            <div class="row col3">

                                <div class="form-group">
                                    <label for="mga" class="label">Moyenne générale annuelle<span
                                            class="ast">*</span></label>
                                    <input type="number" name="moyenneGeneraleAnnuelle" id="moyenneGeneraleAnnuelle">
                                </div>
                                <div class="form-group">
                                    <label for="moybac" class="label">Moyenne du bac<span class="ast">*</span></label>
                                    <input type="number" name="moyenneBac" id="moybac">
                                </div>
                                <div class="form-group">
                                    <label for="pointbac" class="label">Points du bac<span class="ast">*</span></label>
                                    <input type="number" name="totalPointBac" id="pointbac">
                                </div>
                            </div>
                    </div>

                    <div class="fichiers">
                        <hr>
                        <h2>FICHIERS</h2>
                        <div class="row col1">
                            <div class="form-group">
                                <label for="typeannee" class="label">Type d'année scolaire<span
                                        class="ast">*</span></label>
                                <select name="typeannee" id="typeannee">
                                    <option value="">...</option>
                                    <option value="t">Trimestre</option>
                                    <option value="s">Semestre</option>

                                </select>
                            </div>
                        </div>
                        <div class="row col4 f_off" id="trimestre">
                            <div class="form-group">
                                <label for="bulletinDuTrimestre1" class="label">Bulletin du 1<sup>er</sup>
                                    trimestre<span class="ast">*</span></label>
                                <input type="file" name="bulletinDuTrimestre1" id="bulletinDuTrimestre1"
                                    accept="image/*, application/pdf">
                            </div>
                            <div class="form-group">
                                <label for="bulletinDuTrimestre2" class="label">Bulletin du 2<sup>ème</sup>
                                    trimestre<span class="ast">*</span></label>
                                <input type="file" name="bulletinDuTrimestre2" id="bulletinDuTrimestre2"
                                    accept="image/*, application/pdf">
                            </div>
                            <div class="form-group">
                                <label for="bulletinDuTrimestre3" class="label">Bulletin du 3<sup>ème</sup>
                                    trimestre<span class="ast">*</span></label>
                                <input type="file" name="bulletinDuTrimestre3" id="bulletinDuTrimestre3"
                                    accept="image/*, application/pdf">
                            </div>
                            <div class="form-group">
                                <label for="releveDeNoteDuBacT" class="label">Relevé de note du bac<span
                                        class="ast">*</span></label>
                                <input type="file" name="releveDeNoteDuBacT" id="releveDeNoteDuBacT"
                                    accept="image/*, application/pdf">
                            </div>
                        </div>
                        <div class="row col3 f_off" id="semestre">
                            <div class="form-group">
                                <label for="bulletinDuSemestre1" class="label">Bulletin du 1<sup>er</sup> semestre<span
                                        class="ast">*</span></label>
                                <input type="file" name="bulletinDuSemestre1" id="bulletinDuSemestre1"
                                    accept="image/*, application/pdf">
                            </div>
                            <div class="form-group">
                                <label for="bulletinDuSemestre2" class="label">Bulletin du 2<sup>ème</sup> semestre<span
                                        class="ast">*</span></label>
                                <input type="file" name="bulletinDuSemestre2" id="bulletinDuSemestre2"
                                    accept="image/*, application/pdf">
                            </div>
                            <div class="form-group">
                                <label for="releveDeNoteDuBacS" class="label">Relevé de note du bac<span
                                        class="ast">*</span></label>
                                <input type="file" name="releveDeNoteDuBacS" id="releveDeNoteDuBacS"
                                    accept="image/*, application/pdf">
                            </div>
                        </div>
                    </div>

                    <div class="validation">
                        <div class="row col2">
                            <div class="form-group">
                                <input type="reset" value="Annuler" class="bg-red-500 text-white" id="btn-reset-nb">
                            </div>
                            <div class="form-group">
                                <input type="submit" value="Enregistrer" class="bg_orange text-white" id="btn-valid-nb"
                                    name="">
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        </form>
    </div>
    </div>
    </div>

    </div>

    <!-- JS -->
    <script>
        // Obtenez les boutons radio et les champs de saisie
const travailleurRadio = document.getElementById('ptravailleur');
const etudiantRadio = document.getElementById('petudiant');
const entrepriseInput = document.getElementById('enterprise');
const etablissementInput = document.getElementById('etablissement');

// Ajoutez un écouteur d'événements aux boutons radio
travailleurRadio.addEventListener('click', function() {
  entrepriseInput.style.display = 'block';
  etablissementInput.style.display = 'none';
});

etudiantRadio.addEventListener('click', function() {
  entrepriseInput.style.display = 'none';
  etablissementInput.style.display = 'block';
});
    </script>
    <script>
        // Obtenez les références des boutons et des parties du formulaire
const boutonPrecedent = document.getElementById('bouton-precedent');
const boutonSuivant = document.getElementById('bouton-suivant');
const premierePartie = document.getElementById('formulaireab');
const deuxiemePartie = document.getElementById('deuxieme-partie');

// Ajoutez des écouteurs d'événements aux boutons
boutonPrecedent.addEventListener('click', () => {
  premierePartie.style.display = 'block';
  deuxiemePartie.style.display = 'none';
});

boutonSuivant.addEventListener('click', () => {
  premierePartie.style.display = 'none';
  deuxiemePartie.style.display = 'block';
});
    </script>
    <script>
        // Get the select element and the corresponding input field containers
// Get the select element and the corresponding input field containers
const typeAnneeSelect = document.getElementById('typeannee');
const trimestreContainer = document.getElementById('trimestre');
const semestreContainer = document.getElementById('semestre');

// Add an event listener to the select element
typeAnneeSelect.addEventListener('change', function() {
  // Check the selected value
  if (typeAnneeSelect.value === 't') {
    // Show the trimester input fields and hide the semestre input fields
    trimestreContainer.style.display = 'block';
    semestreContainer.style.display = 'none';
  } else if (typeAnneeSelect.value === 's') {
    // Show the semestre input fields and hide the trimester input fields
    trimestreContainer.style.display = 'none';
    semestreContainer.style.display = 'block';
  } else {
    // Hide both input field containers if no option is selected
    trimestreContainer.style.display = 'none';
    semestreContainer.style.display = 'none';
  }
});

// Hide both input field containers initially
trimestreContainer.style.display = 'none';
semestreContainer.style.display = 'none';
    </script>

    <script src="{{ asset('nouveaux_bachelier/vendor/jquery/jquery.min.js') }}"></script>


    <script src="{{ asset('nouveaux_bachelier/js/select.js') }}"></script>
    <script src="{{ asset('nouveaux_bachelier/js/check.js') }}"></script>
</body><!-- This templates was made by Colorlib (https://colorlib.com) -->

</html>