<!-- second_step_form.blade.php -->

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
        <div class="container">
            <div class="signup-content">
                <div class="signup-img">
                    <img src="{{ asset('nouveaux_bachelier/images/signup-img.jpg') }}" alt="CPEDEC">
                </div>
                <div class="signup-form">
                    <form method="post" action="/nouveaux_bacheliers/inscription" id="formulaireab" class="register-form"
                        enctype="multipart/form-data">
                        @csrf
                        <h2>RELEVÉ DE NOTES</h2>

                        <div>
                            <h2>Moyennes annuelles</h2>
                        </div>
                        <div class="row col3">
                            <div class="form-group">
                                <label for="moyannfran" class="label">Français<span class="ast">*</span></label>
                                <input type="number" name="moyenneAnnuelleFrancais" id="moyannfran" required>
                            </div>
                            <div class="form-group">
                                <label for="moyannang" class="label">Anglais<span class="ast">*</span></label>
                                <input type="number" name="moyenneAnnuelleAnglais" id="moyenneAnnuelleAnglais"
                                    required>
                            </div>
                            <div class="form-group">
                                <label for="moyannmath" class="label">Mathématiques<span class="ast">*</span></label>
                                <input type="number" name="moyenneAnnuelleMath" id="moyenneAnnuelleMath" required>
                            </div>
                        </div>
                        <div>
                            <h2>Notes du bac</h2>
                        </div>
                        <div class="row col3">
                            <div class="form-group">
                                <label for="notebacfran" class="label">Français<span class="ast">*</span></label>
                                <input type="number" name="noteBacFrancais" id="noteBacFrancais" required>
                            </div>
                            <div class="form-group">
                                <label for="notebacang" class="label">Anglais<span class="ast">*</span></label>
                                <input type="number" name="noteBacAnglais" id="noteBacAnglais" required>
                            </div>
                            <div class="form-group">
                                <label for="notebacmath" class="label">Mathématiques<span class="ast">*</span></label>
                                <input type="number" name="noteBacMath" id="noteBacMath" required>
                            </div>
                        </div>
                        <div>
                            <h2>Autres</h2>
                        </div>
                        <div class="row col3">
                            <div class="form-group">
                                <label for="mga" class="label">Moyenne générale annuelle<span
                                        class="ast">*</span></label>
                                <input type="number" name="moyenneGeneraleAnnuelle" id="moyenneGeneraleAnnuelle"
                                    required>
                            </div>
                            <div class="form-group">
                                <label for="moybac" class="label">Moyenne du bac<span class="ast">*</span></label>
                                <input type="number" name="moyenneBac" id="moybac" required>
                            </div>
                            <div class="form-group">
                                <label for="pointbac" class="label">Points du bac<span class="ast">*</span></label>
                                <input type="number" name="totalPointBac" id="pointbac" required>
                            </div>
                        </div>

                        <div class="fichiers">
                            <hr>
                            <h2>FICHIERS</h2>
                            <div class="row col1">
                                <div class="form-group">
                                    <label for="typeannee" class="label">Type d'année scolaire<span
                                            class="ast">*</span></label>
                                    <select name="typeannee" id="typeannee" required>
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
                                        accept="image/*, application/pdf" required>
                                </div>
                                <div class="form-group">
                                    <label for="bulletinDuTrimestre2" class="label">Bulletin du 2<sup>ème</sup>
                                        trimestre<span class="ast">*</span></label>
                                    <input type="file" name="bulletinDuTrimestre2" id="bulletinDuTrimestre2"
                                        accept="image/*, application/pdf" required>
                                </div>
                                <div class="form-group">
                                    <label for="bulletinDuTrimestre3" class="label">Bulletin du 3<sup>ème</sup>
                                        trimestre<span class="ast">*</span></label>
                                    <input type="file" name="bulletinDuTrimestre3" id="bulletinDuTrimestre3"
                                        accept="image/*, application/pdf" required>
                                </div>
                                <div class="form-group">
                                    <label for="releveDeNoteDuBacT" class="label">Relevé de note du bac<span
                                            class="ast">*</span></label>
                                    <input type="file" name="releveDeNoteDuBacT" id="releveDeNoteDuBacT"
                                        accept="image/*, application/pdf" required>
                                </div>
                            </div>
                            <div class="row col3 f_off" id="semestre">
                                <div class="form-group">
                                    <label for="bulletinDuSemestre1" class="label">Bulletin du 1<sup>er</sup>
                                        semestre<span class="ast">*</span></label>
                                    <input type="file" name="bulletinDuSemestre1" id="bulletinDuSemestre1"
                                        accept="image/*, application/pdf" required>
                                </div>
                                <div class="form-group">
                                    <label for="bulletinDuSemestre2" class="label">Bulletin du 2<sup>ème</sup>
                                        semestre<span class="ast">*</span></label>
                                    <input type="file" name="bulletinDuSemestre2" id="bulletinDuSemestre2"
                                        accept="image/*, application/pdf" required>
                                </div>
                                <div class="form-group">
                                    <label for="releveDeNoteDuBacS" class="label">Relevé de note du bac<span
                                            class="ast">*</span></label>
                                    <input type="file" name="releveDeNoteDuBacS" id="releveDeNoteDuBacS"
                                        accept="image/*, application/pdf" required>
                                </div>
                            </div>
                        </div>

                        <div class="validation">
                            <div class="row col2">
                                <div class="form-group">
                                    <input type="reset" value="Annuler" class="bg-red-500 text-white"
                                        id="btn-reset-nb">
                                </div>
                                <div class="form-group">
                                    <input type="submit" value="Enregistrer" class="bg_orange text-white"
                                        id="btn-valid-nb" name="">
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- JS -->
    <!-- JS -->
    <script src="{{ asset('nouveaux_bachelier/vendor/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('nouveaux_bachelier/js/select.js') }}"></script>
    <script src="{{ asset('nouveaux_bachelier/js/check.js') }}"></script>


    <script>
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

</body><!-- This templates was made by Colorlib (https://colorlib.com) -->

</html>
