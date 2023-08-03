<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>CPDEC INPHB | Fiche de préinscription ancien bachelier 2022-2023</title>
     <!-- Font Icon -->
   <link rel="stylesheet" href="{{ asset('fichenb/fonts/material-icon/css/material-design-iconic-font.min.css') }}">

<!-- Main css -->
<link rel="stylesheet" href="{{ asset('fichenb/css/style.css') }}">



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
 
</head>
<body>
<div class="banner">
        <img src="{{ asset('ficheab/images/banner.jpg') }}">
    </div>
    <br>


    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }
        .container {
            max-width: 800px;
            margin: 0 auto;
            padding: 20px;
        }
        .header {
            text-align: center;
            font-size: 18px;
            margin-bottom: 20px;
        }
        .section-title {
            font-size: 16px;
            font-weight: bold;
            margin-top: 20px;
            margin-bottom: 10px;
        }
        .info-label {
        font-size: 15px; /* Remplacez la valeur par celle de votre choix */
    }
    </style>
    <style>
        .section-title {
            font-size: 20px;
            font-weight: bold;
            margin-top: 20px;
            margin-bottom: 10px;
            color: #333; /* Add your desired color */
        }
        
        .info-table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 10px;
            overflow-x: auto; 
        }
        
        .info-table th,
        .info-table td {
            padding: 10px;
            border: 1px solid #ccc;
            
             /* Add your desired border color */
        }
        
        .info-table th {
            font-weight: bold;
            background-color: #f2f2f2; /* Add your desired background color */
        }
        
        .info-table td {
            text-align: center;
        }
    </style>
    <style>
        .container {
            position: relative;
        }
    
        .container::before {
            content: "";
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-image: url("ficheab/images/cpdecimprim.png");
            background-repeat: no-repeat;
            background-position: center;
            background-size: 30%;
            opacity: 0.5; /* Ajustez la valeur d'opacité selon vos besoins */
            pointer-events: none; /* Permet de cliquer à travers le filigrane */
        }
    </style>
    <title>Fiche de preinscription</title>
</head>
<body>
    <div class="container">
        <div class="header">
            FICHE DE PREINSCRIPTION ANCIEN BACHELIER - CPDEC 2022-2023
        </div>
        <hr>
        <div class="section-title">ID:</span> DCPEDCA-B{{ $ancienBachelier->id }}</div>
        <hr>
        <div class="section-title">INFORMATIONS PERSONNELLES</div>
        <div>
            <span class="info-label">Nom et Prénom : </span>
            {{ $ancienBachelier->nom }} {{ $ancienBachelier->prenom }}
        </div>
        <div>
            <span class="info-label">Date de naissance :</span>
            {{ $ancienBachelier->dateDeNaissance }}
        </div>
        <div>
            <span class="info-label">Lieu de naissance :</span>
            {{ $ancienBachelier->lieuDeNaissance }}
        </div>
        <div>
            <span class="info-label">Nationalité :</span>
            {{ $ancienBachelier->nationalite }}
        </div>
        <div>
            <span class="info-label">Contact :</span>
            {{ $ancienBachelier->contact }}
        </div>
        <div>
            <span class="info-label">Email :</span>
            {{ $ancienBachelier->email }}
        </div>
        <hr>
        <div class="section-title">ETABLISSEMENT D'ORIGINE</div>
        <div>
            <span class="info-label">Etablissement d'origine :</span>
            {{ $ancienBachelier->etablissementDorigine }}
        </div>
        <div>
            <span class="info-label">Série du baccalauréat :</span>
            {{ $ancienBachelier->serie }}
        </div>
        <hr>
        <div class="section-title">INFORMATIONS SUR LES NOTES</div>
        <table class="info-table">
            <tr>
                <th>Matières</th>
                <th>Moyennes annuelles</th>
                <th>Notes du bac</th>
            </tr>
            <tr>
                <td>Français</td>
                <td>{{ $ancienBachelier->moyenneAnnuelleFrancais }}</td>
                <td>{{ $ancienBachelier->noteBacFrancais }}</td>
            </tr>
            <tr>
                <td>Anglais</td>
                <td>{{ $ancienBachelier->moyenneAnnuelleAnglais }}</td>
                <td>{{ $ancienBachelier->noteBacAnglais }}</td>
            </tr>
            <tr>
                <td>Mathématiques</td>
                <td>{{ $ancienBachelier->moyenneAnnuelleMath }}</td>
                <td>{{ $ancienBachelier->noteBacMath }}</td>
            </tr>
            <!-- Ajoutez d'autres matières et colonnes ici si nécessaire -->
        </table>
        <hr>
        <div>
            <span class="info-label">Moyenne générale annuelle :</span>
            {{ $ancienBachelier->moyenneGeneraleAnnuelle }}
        </div>
        <div>
            <span class="info-label">Moyenne du bac :</span>
            {{ $ancienBachelier->moyenneBac }}
        </div>
        <div>
            <span class="info-label">Points du bac :</span>
            {{ $ancienBachelier->totalPointBac }}
        </div>
    </div>
</body>
</html>
