<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>CPDEC | Inscription anciens bacheliers</title>

    <!-- Font Icon -->
    <link rel="stylesheet" href="{{ asset('anciens_bachelier/fonts/material-icon/css/material-design-iconic-font.min.css') }}">

    <!-- Main css -->
    <link rel="stylesheet" href="{{ asset('anciens_bachelier/css/style.css') }}">

    
</head>
<body>
    <div class="banner">
    <img src="{{ asset('anciens_bachelier/images/banner.jpg') }}" alt="Banner Image">

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
        <div class="container">
            <div class="signup-content">
                <div class="signup-img">
                <img src="{{ asset('anciens_bachelier/images/signup-img.jpg') }}" alt="CPEDEC">
                </div>
                <div class="signup-form">
                    <form  method="post" action="" name="formulaireab" id="formulaireab" class="register-form" id="register-form"
                     enctype="multipart/form-data">
                        <h2>Identification (Anciens bacheliers)</h2>
                        <div class="form-row">
                            <div class="form-group">
                                <label for="nom" class="label">Nom<span class="ast">*</span></label><input type="text" name="nom" id="nom">
                            </div>
                            <div class="form-group">
                                <label for="prenom" class="label">Prénoms<span class="ast">*</span></label><input type="text" name="prenom"
                                                                                        id="prenom">
                            </div>
                        </div>
                        <div class="form-row">
                        <div class="form-group">
                            <label for="ddnaiss" class="label">Date de naissance<span class="ast">*</span></label><input type="date"
                                                                                                name="ddnaiss"
                                                                                                id="ddnaiss">
                        </div>
                        <div class="form-group">
                            <label for="lieunaiss" class="label">Lieu de naissance<span class="ast">*</span></label><input type="text"
                                                                                                  name="lieunaiss"
                                                                                                  id="lieunaiss">
                        </div>
                        <div class="form-group">
                            <label for="nationalite" class="label">Nationalité<span class="ast">*</span></label><input type="text"
                                                                                              name="nationalite"
                                                                                              id="nationalite">
                        </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group">
                                <label for="contact" class="label">Contact du candidat<span class="ast">*</span></label><input type="text"
                                                                                                      name="contact"
                                                                                                      id="contact">
                            </div>
                            <div class="form-group">
                                <label for="email" class="label">Email du candidat<span class="ast">*</span></label><input type="email" name="email"
                                                                                                  id="email">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group">
                                <label class="label" for="diplome">Dernier diplome<span class="ast">*</span></label>
                                <select class="form-select" name="diplome" id="diplome">
                                    <option value="choisir">choisir...................................</option>
                                    <option value="BAC">BAC</option>
                                    <option value="BTS">BTS</option>
                                    <option value="LICENCE">LICENCE</option>
                                    <option value="MASTER">MASTER</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="anneediplome" class="label">Année du diplome<span class="ast">*</span></label>
                                <input type="text" name="anneediplome" id="anneediplome">
                        
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group">
                                <label for="nomparent" class="label">Nom du parent</label>
                                <input type="text" name="nomparent" id="nomparent">
                            </div>
                            <div class="form-group">
                                <label for="prenomparent" class="label">Prénom du parent</label>
                            <input type="text" name="prenomparent" id="prenomparent">
                        
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group">
                                <label for="contactparent" class="label">Contact du parent</label>
                                <input type="text" name="contactparent" id="contactparent">
                            </div>
                            <div class="form-group">
                                <label for="emailparent" class="label">Email du parent</label>
                                <input type="email" name="emailparent" id="emailparent">
                            </div>
                            <div class="form-group">
                                <label for="adresseparent" class="label">Adresse du parent</label>
                            <input type="text" name="adresseparent" id="adresseparent">
                            </div>
                            </div>

                            
                        <div class="choixdesue">    
                            <hr><h2>Choix des UE</h2>
                        <div class="form-group">
                            <label for="select" class="label">Choisissez vos UE<span class="ast">*</span></label>
                            <select class="form-select" id="select" name="ue">
                                <option value="">..................................................</option>
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
                        </div>
                        <div class="form-group">
                            <div><label>UE choisies (<span id="nbUe"></span>)</label></div>
                            <div class="area" id="area">
                                <div class="choix"><input type="hidden" value="111" name="ue[]">Fondamentaux du droit<span class="ast">*</span></div>
                                <div class="choix"><input type="hidden" value="119" name="ue[]">Comptabilité<span class="ast">*</span></div>
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
                     <form  method="post" action="../../controllers/canciens.php" name="formulaireab" id="formulaireab" class="register-form" id="register-form"
                            enctype="multipart/form-data">    
                        <hr><h2>SITUATION DU CANDIDAT</h2>
                        
                        <div class="form-radio">
                            <label for="gender" class="radio-label">Profession*</label>
                            <div class="form-radio-item">
                                <input type="radio" name="profession" id="ptravailleur" value="TRAVAILLEUR"checked>
                                <label for="ptravailleur" class="label radio-label">Travailleur</label>
                                <span class="check"></span>
                            </div>
                            <div class="form-radio-item">
                                <input type="radio" name="profession" id="petudiant" value="ETUDIANT"checked>
                                <label for="petudiant" class="label radiolabel">&Eacute;tudiant</label>
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
                                <label class="label" for="etablissement">Etablissement<span class="ast">*</span></label>
                                <input type="text" name="etablissement" id="etablissement">
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
                                <input type="radio" name="cours" id="coursdujour" value="jour"checked>
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
                            <hr><h2>FICHIERS</h2>
                            <div class="row col2" id="trimestre">
                                <div class="form-group">
                                    <label for="releveDeNoteDuBac" class="label">Relevé de note du bac<span class="ast">*</span></label>
                                    <input type="file" name="releveDeNoteDuBac" id="releveDeNoteDuBac" accept="image/*, application/pdf">
                                </div>
                                <div class="form-group">
                                    <label for="autreDocument" class="label">Autre document<span class="ast">*</span></label>
                                    <input type="file" name="autreDocument" id="autreDocument" accept="image/*, application/pdf">
                                </div>
                            </div>
                        </div>
                        <div class="validation">
                            <div class="row col2">
                                <div class="form-group">
                                    <input type="reset" value="Annuler" class="bg-red-500 text-white" id="btn-reset-ab">
                                </div>
                                <div class="form-group">
                                    <input type="submit" value="Enregistrer" class="bg_green text-white" id="btn-valid-ab">
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
    <script src="{{ asset('anciens_bachelier/vendor/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('anciens_bachelier/js/main.js') }}"></script>
    <script src="{{ asset('anciens_bachelier/js/index.js') }}"></script>
    <script src="{{ asset('anciens_bachelier/js/load.js') }}"></script>
    <script src="{{ asset('anciens_bachelier/js/select.js') }}"></script>
    <script src="{{ asset('anciens_bachelier/js/check.js') }}"></script>
</body><!-- This templates was made by Colorlib (https://colorlib.com) -->
</html>