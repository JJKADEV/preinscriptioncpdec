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
                    <form method="post" action="/anciens_bacheliers" id="formulaireab" class="register-form">
                        @csrf
                        <h2>Identification (Anciens bacheliers)</h2>
                        <div class="form-row">
                            <div class="form-group">
                                <label for="nom" class="label">Nom<span class="ast">*</span></label>
                                <input type="text" name="nom" id="nom" required>
                                <div id="nom-error" class="error-message"></div> <!-- Error message for the field -->
                            </div>
                            <div class="form-group">
                                <label for="prenom" class="label">Prénoms<span class="ast">*</span></label>
                                <input type="text" name="prenom" id="prenom" required>
                                <div id="prenom-error" class="error-message"></div> <!-- Error message for the field -->
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group">
                                <label for="ddnaiss" class="label">Date de naissance<span class="ast">*</span></label>
                                <input type="date" name="dateDeNaissance" id="ddnaiss" required>
                                <div id="ddnaiss-error" class="error-message"></div> <!-- Error message for the field -->
                            </div>
                            <div class="form-group">
                                <label for="lieunaiss" class="label">Lieu de naissance<span
                                        class="ast">*</span></label>
                                <input type="text" name="lieuDeNaissance" id="lieunaiss" required>
                                <div id="lieunaiss-error" class="error-message"></div> <!-- Error message for the field -->
                            </div>
                            <div class="form-group">
                                <label for="nationalite" class="label">Nationalité<span
                                        class="ast">*</span></label>
                                <input type="text" name="nationalite" id="nationalite" required>
                                <div id="nationalite-error" class="error-message"></div> <!-- Error message for the field -->
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group">
                                <label for="contact" class="label">Contact du candidat<span
                                        class="ast">*</span></label>
                                <input type="text" name="contact" id="contact" required>
                                <div id="contact-error" class="error-message"></div> <!-- Error message for the field -->
                            </div>
                            <div class="form-group">
                                <label for="email" class="label">Email du candidat<span
                                        class="ast">*</span></label>
                                <input type="email" name="email" id="email" required>
                                <div id="email-error" class="error-message"></div> <!-- Error message for the field -->
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group">
                                <label class="label" for="diplome">Dernier diplome<span class="ast">*</span></label>
                                <select class="form-select" name="diplome" id="diplome" required>
                                    <option value="choisir">choisir...................................</option>
                                    <option value="BAC">BAC</option>
                                    <option value="BTS">BTS</option>
                                    <option value="LICENCE">LICENCE</option>
                                    <option value="MASTER">MASTER</option>
                                </select>
                                <div id="diplome-error" class="error-message"></div> <!-- Error message for the field -->
                            </div>
                            <div class="form-group">
                                <label for="anneediplome" class="label">Année du diplome<span
                                        class="ast">*</span></label>
                                <input type="text" name="anneeDuDiplome" id="anneediplome" required>
                                <div id="anneediplome-error" class="error-message"></div> <!-- Error message for the field -->
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group">
                                <label for="nomparent" class="label">Nom du parent</label>
                                <input type="text" name="nomDuParent" id="nomparent">
                            </div>
                            <div class="form-group">
                                <label for="prenomparent" class="label">Prénom du parent</label>
                                <input type="text" name="prenomDuParent" id="prenomparent" required>
                                <div id="prenomparent-error" class="error-message"></div> <!-- Error message for the field -->
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group">
                                <label for="contactparent" class="label">Contact du parent</label>
                                <input type="text" name="contactDuParent" id="contactparent">
                            </div>
                            <div class="form-group">
                                <label for="emailparent" class="label">Email du parent</label>
                                <input type="email" name="emailDuParent" id="emailparent" required>
                                <div id="emailparent-error" class="error-message"></div> <!-- Error message for the field -->
                            </div>
                            <div class="form-group">
                                <label for="adresseparent" class="label">Adresse du parent</label>
                                <input type="text" name="adresseDuParent" id="adresseparent" required>
                                <div id="adresseparent-error" class="error-message"></div> <!-- Error message for the field -->
                            </div>
                        </div>

                        <div class="choixdesue">
                            <hr>
                            <h2>Choix des UE</h2>
                            <div class="form-group">
                                <label for="select" class="label">Choisissez vos UE<span class="ast">*</span></label>
                                <select class="form-select" id="select" name="ue" required>
                                    <option value="0">..................................................</option>
                                    <option value="115" id="115">&Eacute;conomie comptemporaine</option>
                                    <option value="118" id="118">Système d'informations et de gestion</option>
                                    <option value="112" id="112">Droit des sociétés et groupements d'affaires</option>
                                    <option value="114" id="114">Droit fiscal</option>
                                    <option value="120" id="120">Comptabilité approfondie</option>
                                    <option value="122" id="122">Anglais des affaires 1</option>
                                    <option value="113" id="113">Droit social</option>
                                    <option value="116" id="116">Finance d'entreprise</option>
                                    <option value="117" id="117">Management</option>
                                    <option value="121" id="121">Contr&ocirc;le de gestion</option>
                                    <option value="123" id="123">Communication professionnelle</option>
                                    <option value="211" id="211">Gestion juridique et fiscal</option>
                                    <option value="213" id="213">Management et contr&ocirc;le de gestion</option>
                                    <option value="218" id="218">Anglais des affaires 2</option>
                                    <option value="212" id="212">Finance</option>
                                    <option value="214" id="214">Comptabilité et audit</option>
                                    <option value="215" id="215">Management des systèmes d'information</option>
                                    <option value="217" id="217">Mémoire</option>
                                </select>
                                <div id="ue-error" class="error-message"></div> <!-- Error message for the field -->
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

                        <div>
                            <button id="bouton-suivant">Suivant</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script src="{{ asset('anciens_bachelier/vendor/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('anciens_bachelier/js/select.js') }}"></script>
    <script src="{{ asset('anciens_bachelier/js/check.js') }}"></script>

    <!-- ... (votre code HTML) ... -->

    <script>
    const boutonSuivant = document.getElementById('bouton-suivant');
    const formulaire = document.getElementById('formulaireab');
    const selectUE = document.getElementById('select');
    const ueError = document.getElementById('ue-error');

    boutonSuivant.addEventListener('click', function(event) {
    const requiredFields = document.querySelectorAll('[required]');
    let hasError = false;

    requiredFields.forEach(field => {
        if (!field.value.trim()) {
            hasError = true;
            const fieldName = field.name;
            const errorElement = document.getElementById(`${fieldName}-error`);
            errorElement.textContent = 'Veuillez remplir ce champ.';
        } else {
            const fieldName = field.name;
            const errorElement = document.getElementById(`${fieldName}-error`);
            errorElement.textContent = ''; // Clear the error message if the field is filled
        }
    });

    // Check if at least one UE is selected
    const selectedUE = selectUE.value;

    if (!selectedUE || selectedUE === "") {
        // If no UE is selected, show an error message
        ueError.textContent = 'Veuillez choisir au moins une UE.';
        hasError = true;
    } else {
        ueError.textContent = ''; // Clear the error message if an UE is selected
    }

    if (hasError) {
        event.preventDefault();
    } else {
        formulaire.submit();
    }
});
</script>




</body>

</html>