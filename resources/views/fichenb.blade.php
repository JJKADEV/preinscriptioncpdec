<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>CPDEC INPHB | Fiche de préinscription nouveau bachelier 2022-2023</title>
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
        <img src="{{ asset('fichenb/images/banner.jpg') }}">
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
            background-image: url("fichenb/images/cpdecimprim.png");
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
            FICHE DE PREINSCRIPTION NOUVEAU BACHELIER - CPDEC 2022-2023
        </div>
        <hr>
        <div class="section-title">ID:</span> DCPEDCN-B{{ $nouveauBachelier->id }}</div>
        <hr>
        <div class="section-title">INFORMATIONS PERSONNELLES</div>
        <div>
            <span class="info-label">Nom et Prénom : </span>
            {{ $nouveauBachelier->nom }} {{ $nouveauBachelier->prenom }}
        </div>
        <div>
            <span class="info-label">Date de naissance :</span>
            {{ $nouveauBachelier->dateDeNaissance }}
        </div>
        <div>
            <span class="info-label">Lieu de naissance :</span>
            {{ $nouveauBachelier->lieuDeNaissance }}
        </div>
        <div>
            <span class="info-label">Nationalité :</span>
            {{ $nouveauBachelier->nationalite }}
        </div>
        <div>
            <span class="info-label">Contact :</span>
            {{ $nouveauBachelier->contact }}
        </div>
        <div>
            <span class="info-label">Email :</span>
            {{ $nouveauBachelier->email }}
        </div>
        <hr>
        <div class="section-title">ETABLISSEMENT D'ORIGINE</div>
        <div>
            <span class="info-label">Etablissement d'origine :</span>
            {{ $nouveauBachelier->etablissementDorigine }}
        </div>
        <div>
            <span class="info-label">Série du baccalauréat :</span>
            {{ $nouveauBachelier->serie }}
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
                <td>{{ $nouveauBachelier->moyenneAnnuelleFrancais }}</td>
                <td>{{ $nouveauBachelier->noteBacFrancais }}</td>
            </tr>
            <tr>
                <td>Anglais</td>
                <td>{{ $nouveauBachelier->moyenneAnnuelleAnglais }}</td>
                <td>{{ $nouveauBachelier->noteBacAnglais }}</td>
            </tr>
            <tr>
                <td>Mathématiques</td>
                <td>{{ $nouveauBachelier->moyenneAnnuelleMath }}</td>
                <td>{{ $nouveauBachelier->noteBacMath }}</td>
            </tr>
            <!-- Ajoutez d'autres matières et colonnes ici si nécessaire -->
        </table>
        <hr>
        <div>
            <span class="info-label">Moyenne générale annuelle :</span>
            {{ $nouveauBachelier->moyenneGeneraleAnnuelle }}
        </div>
        <div>
            <span class="info-label">Moyenne du bac :</span>
            {{ $nouveauBachelier->moyenneBac }}
        </div>
        <div>
            <span class="info-label">Points du bac :</span>
            {{ $nouveauBachelier->totalPointBac }}
        </div>
    </div>
</body>
</html>
