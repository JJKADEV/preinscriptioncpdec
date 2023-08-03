<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>CPDEC | Impression des fiches de preinscription</title>

    <!-- Font Icon -->
    <link rel="stylesheet" href="{{ asset('imprimer/fonts/material-icon/css/material-design-iconic-font.min.css') }}">

    <!-- Main css -->
    <link rel="stylesheet" href="{{ asset('imprimer/css/style.css') }}">


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
    <style>
        /* Style du bouton Imprimer */
        .print-button {
            background-color: #4CAF50;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
    </style>
    
    <style>
        body, html {
            
            flex-direction: column;
            justify-content: center;
            align-items: center;
            font-family: Arial, sans-serif;
            display: flex;
            
        }

        /* Style général */
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 20px;
        }
        
        .label {
            display: block;
            font-weight: bold;
            margin-bottom: 5px;
        }
    
        /* Style du bouton Imprimer */
        .print-button {
            background-color: #4CAF50;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
    </style>
   <style>
    /* Nouveaux styles pour centrer le formulaire et le bouton */
    .form-container {
            width: 100%;
            max-width: 400px;
            padding: 20px;
            background-color: #f8f8f8;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            margin-top: 60px; 
        }

        .form-group {
            margin-bottom: 15px;
        }

        .label {
            display: block;
            font-weight: bold;
            margin-bottom: 5px;
        }

        .print-button {
            background-color: #4CAF50;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            width: 100%;
        }

        @media screen and (max-width: 480px) {
            .form-container {
                padding: 10px;
            }
        }
</style>


</head>
<body>
<div class="banner">
        <img src="{{ asset('imprimer/images/banner.jpg') }}" alt="Banner Image">
    </div>
    <br>
<div class="notification">
    Pour imprimer sa fiche de preinscription le candidat doit obligatoirement renseigner  son mail et son contact qu'il a renseigné lors de sa preinscription en ligne.
</div>   
@if(session('error'))
<div class="alert alert-danger">{{ session('error') }}</div>
@endif

<div class="form-container">
    <form action="{{ route('imprimerFiche') }}" method="post">
        @csrf
        <div class="form-group">
            <label for="contact" class="label">Contact du candidat<span class="ast">*</span></label>
            <input type="text" name="contact" id="contact">
        </div>
        <div class="form-group">
            <label for="email" class="label">Email du candidat<span class="ast">*</span></label>
            <input type="email" name="email" id="email">
        </div>

        <button type="submit" class="print-button">Imprimer sa fiche de préinscription CPDEC 2022-2023</button>
    </form>
</div>


                        
</body><!-- This templates was made by Colorlib (https://colorlib.com) -->
</html>