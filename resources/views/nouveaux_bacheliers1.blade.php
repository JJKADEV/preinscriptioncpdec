<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>CPDEC | Inscription nouveaux bacheliers 2022-2023</title>

    <!-- Font Icon -->
    <link rel="stylesheet" href="{{ asset('nouveaux_bachelier/fonts/material-icon/css/material-design-iconic-font.min.css') }}">

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
                    <form method="post" action="/nouveaux_bacheliers" id="formulaireab" class="register-form">
                        @csrf
                        <h2>Identification (NOUVEAUX BACHELIERS)</h2>
                        <div class="form-row">
                            <div class="form-group">
                                <label for="nom" class="label">Nom<span class="ast">*</span></label>
                                <input type="text" name="nom" id="nom" required>
                            </div>
                            <div class="form-group">
                                <label for="prenom" class="label">Prénoms<span class="ast">*</span></label>
                                <input type="text" name="prenom" id="prenom" required>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group">
                                <label for="ddnaiss" class="label">Date de naissance<span class="ast">*</span></label>
                                <input type="date" name="dateDeNaissance" id="dateDeNaissance" required>
                            </div>
                            <div class="form-group">
                                <label for="lieunaiss" class="label">Lieu de naissance<span class="ast">*</span></label>
                                <input type="text" name="lieuDeNaissance" id="lieuDeNaissance" required>
                            </div>
                            <div class="form-group">
                                <label for="nationalite" class="label">Nationalité<span class="ast">*</span></label>
                                <input type="text" name="nationalite" id="nationalite" required>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group">
                                <label for="contact" class="label">Contact du candidat<span class="ast">*</span></label>
                                <input type="text" name="contact" id="contact" required>
                            </div>
                            <div class="form-group">
                                <label for="email" class="label">Email du candidat<span class="ast">*</span></label>
                                <input type="email" name="email" id="email" required>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group">
                                <label for="etablissementorg" class="label">&Eacute;tablissement d'origine<span
                                        class="ast">*</span></label>
                                <input type="text" name="etablissementDorigine" id="etablissementDorigine" required>
                            </div>
                            <div class="form-group">
                                <label for="serie" class="label">Série du bac<span class="ast">*</span></label>
                                <input type="text" name="serie" id="serie" required>
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
                        </div>
                        
                        <!-- Add buttons to navigate between steps -->
                        <div>
                            <button id="bouton-suivant">Suivant</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- JS -->
    <script src="{{ asset('nouveaux_bachelier/vendor/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('nouveaux_bachelier/js/select.js') }}"></script>
    <script src="{{ asset('nouveaux_bachelier/js/check.js') }}"></script>

    <script>
        // Get the reference to the "Suivant" button and the form
        const boutonSuivant = document.getElementById('bouton-suivant');
        const formulaire = document.getElementById('formulaireab');

        // Add an event listener to the "Suivant" button
        boutonSuivant.addEventListener('click', function() {
            // Submit the form to the next step of the process
            formulaire.submit();
        });
    </script>

</body><!-- This templates was made by Colorlib (https://colorlib.com) -->

</html>
