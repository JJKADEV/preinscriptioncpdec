<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>CPDEC | Inscription anciens bacheliers 2022-2023</title>

    <!-- Font Icon -->
    <link rel="stylesheet"
        href="{{ asset('nouveaux_bachelier/fonts/material-icon/css/material-design-iconic-font.min.css') }}">

    <!-- Main css -->
    <link rel="stylesheet" href="{{ asset('nouveaux_bachelier/css/style.css') }}">

</head>

<body>
<div class="banner">
        <img src="{{ asset('anciens_bachelier/images/banner.jpg') }}" alt="Banner Image">
    </div>
    <style>
    .banner {
        text-align: center;
        padding: 20px;
        border-radius: 10px;
        box-shadow: 0 2px 5px rgba(0, 0, 0, 0.2);
        max-width: 100%;
        overflow: hidden;
    }

    .banner img {
        max-width: 100%;
        height: auto;
        display: block;
        border-radius: 10px;
    }

    @media screen and (max-width: 768px) {
        .banner {
            padding: 10px;
        }
    }
</style>
    <br>
 <style>
    .notification {
        width: 100%;
        padding: 15px;
        background: linear-gradient(45deg, #135492, #8e2d40);
        color: #fff;
        font-size: 18px;
        font-weight: bold;
        text-align: center;
        border-radius: 5px;
        box-shadow: 0 2px 5px rgba(0, 0, 0, 0.2);
        animation: fadeInOut 5s ease infinite;
    }

    @keyframes fadeInOut {
        0%, 100% {
            opacity: 0;
        }
        50% {
            opacity: 1;
        }
    }

    @media screen and (max-width: 480px) {
        .notification {
            padding: 10px; /* Diminuer le padding pour une taille plus compacte sur les petits Ã©crans */
            font-size: 16px; /* RÃ©duire la taille de police pour mieux s'adapter */
        }
    }
</style>
<div class="notification">
    ðŸŽ“  Bienvenue au Centre De PrÃ©paration Au Diplome De L'expertise Comptable-CPDEC. ðŸŽ‰
</div>
<br>   
    <div class="main">
        <div class="container">
            <div class="signup-content">
                <div class="signup-img">
                    <img src="{{ asset('nouveaux_bachelier/images/signup-img.jpg') }}" alt="CPEDEC">
                </div>
                <div class="signup-form">
                    <form method="post" action="/anciens_bacheliers/inscription" id="formulaireab" class="register-form"
                        enctype="multipart/form-data">
                        @csrf
                        <hr>
                        <h2>SITUATION DU CANDIDAT</h2>

                        <div class="form-radio">
                            <label for="ptravailleur" class="radio-label">Profession*</label>
                            <div class="form-radio-item">
                                <input type="radio" name="profession" id="ptravailleur" value="TRAVAILLEUR" checked>
                                <label for="ptravailleur" class="label radio-label">Travailleur</label>
                                <span class="check"></span>
                            </div>
                            <div class="form-radio-item">
                                <input type="radio" name="profession" id="petudiant" value="ETUDIANT">
                                <label for="petudiant" class="label radiolabel">Étudiant</label>
                                <span class="check"></span>
                            </div>
                        </div>
                        <div class="row col1 f_off" id="enterprisediv">
                            <div class="form-group">
                                <label class="label" for="entreprise">Entreprise<span class="ast">*</span></label>
                                <input type="text" name="entreprise" id="enterprise">
                            </div>
                        </div>
                        <div class="row col1 f_off" id="etablissementdiv">
                            <div class="form-group">
                                <label class="label" for="etablissementDorigine">Établissement<span
                                        class="ast">*</span></label>
                                <input type="text" name="etablissementDorigine" id="etablissementDorigine">
                            </div>
                        </div>

                        <br>
                        <div class="form-radio" id="ves">
                            <label for="" class="label">Validation des études supérieures<span class="ast">*</span></label>
                            <div class="form-radio-item">
                                <input type="radio" name="ves" id="vesoui" value="oui" checked>
                                <label for="vesoui" class="label radiolabel">Oui</label>
                                <span class="check"></span>
                            </div>
                            <div class="form-radio-item">
                                <input type="radio" name="ves" id="vesencours" value="en cours" checked>
                                <label for="vesencours" class="label radiolabel">En cours</label>
                                <span class="check"></span>
                            </div>
                            <div class="form-radio-item">
                                <input type="radio" name="ves" id="vesnon" value="non" checked>
                                <label for="vesnon" class="label radiolabel">Non</label>
                                <span class="check"></span>
                            </div>

                        </div>
                        <br>

                        <div class="form-radio" id="ves">
                            <label for="" class="label">Cours<span class="ast">*</span></label>
                            <div class="form-radio-item">
                                <input type="radio" name="cours" id="coursdujour" value="jour" checked>
                                <label for="coursdujour" class="label radiolabel">Jour</label>
                                <span class="check"></span>
                            </div>
                            <div class="form-radio-item">
                                <input type="radio" name="cours" id="coursdusoir" value="soir" checked>
                                <label for="coursdusoir" class="label radiolabel">Soir</label>
                                <span class="check"></span>
                            </div>

                        </div>

                        <div class="fichiers">
                            <hr>
                            <h2>FICHIERS</h2>
                            <div class="row col2" id="trimestre">
    <div class="form-group">
        <label for="releveDeNoteDuBac" class="label">Relevé de notes du bac<span class="ast">*</span></label>
        <input type="file" name="releveDeNoteDuBac" id="releveDeNoteDuBac" accept="image/*, application/pdf">
        <span class="file-instructions">Veuillez télécharger un fichier PDF</span>
    </div>
    <div class="form-group">
        <label for="autreDocument" class="label">Autre document<span class="ast">*</span></label>
        <input type="file" name="autreDocument" id="autreDocument" accept="image/*, application/pdf">
        <span class="file-instructions">Veuillez télécharger un fichier PDF</span>
    </div>
</div>
                        </div>
                        <div class="validation">
                            <div class="row col2">
                                <div class="form-group">
                                    <input type="reset" value="Annuler" class="bg-red-500 text-white" id="">
                                </div>
                                <div class="form-group">
                                    <input type="submit" value="Enregistrer" class="bg_orange text-white" id="">
                                </div>
                            </div>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- JS -->
    <script src="{{ asset('anciens_bachelier/vendor/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('anciens_bachelier/js/select.js') }}"></script>
    <script src="{{ asset('anciens_bachelier/js/check.js') }}"></script>

    <script>
        // Obtenez les boutons radio et les champs de saisie
        const travailleurRadio = document.getElementById('ptravailleur');
        const etudiantRadio = document.getElementById('petudiant');
        const entrepriseInput = document.getElementById('enterprise');
        const etablissementInput = document.getElementById('etablissementDorigine');

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
        // Get the reference to the "Suivant" button and the form
        const boutonSuivant = document.getElementById('btn-valid-nb');
        const formulaire = document.getElementById('formulaireab');

        // Add an event listener to the "Suivant" button
        boutonSuivant.addEventListener('click', function() {
            // Submit the form to the next step of the process
            formulaire.submit();
        });
    </script>

</body>

</html>
