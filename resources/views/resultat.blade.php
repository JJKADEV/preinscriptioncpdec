<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>CPDEC | RESULTAT D'ADMISSIBILITE 2023 </title>

    <!-- Font Icon -->
    <link rel="stylesheet" href="{{ asset('resultat/fonts/material-icon/css/material-design-iconic-font.min.css') }}">

    <!-- Main css -->
    <link rel="stylesheet" href="{{ asset('resultat/css/style.css') }}">


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
<style>
 /* Style pour le message d'admission */
.admission-message {
    background-color: #4CAF50;
    color: white;
    padding: 10px;
    border-radius: 5px;
    text-align: center;
    margin: 10px;
}

.user-name {
    font-weight: bold;
}

/* Style pour le message de traitement */
.processing-message {
    background-color: #FF5733;
    color: white;
    padding: 10px;
    border-radius: 5px;
    text-align: center;
    margin: 10px;
}
.notificationnb {
  background-color: #3498db;
  color: white;
  text-align: center;
  padding: 10px;
  font-family: Arial, sans-serif;
  margin-bottom: 20px;
  animation: suspense 1.5s infinite alternate;
}

@keyframes suspense {
  0% {
    transform: translateY(0);
  }
  100% {
    transform: translateY(-1px);
  }
}


</style>  
<style>
    /* Style du popup */
    .modal {
        display: none;
        position: fixed;
        z-index: 1000;
        left: 0;
        top: 0;
        width: 100%;
        height: 100%;
        background-color: rgba(0, 0, 0, 0.6);
        align-items: center;
        justify-content: center;
    }

    .modal-content {
        background-color: white;
        padding: 20px;
        border-radius: 5px;
        box-shadow: 0 2px 8px rgba(0, 0, 0, 0.3);
        text-align: center;
        max-width: 80%;
    }

    .close-button {
        position: absolute;
        top: 10px;
        right: 15px;
        font-size: 24px;
        cursor: pointer;
    }
</style>

</head>
<body>
<div class="banner">
        <img src="{{ asset('resultat/images/banner.jpg') }}" alt="Banner Image">
    </div>
    <br>
    <div class="notificationnb">
    CPDEC | Résultats d'admissibilité 2023-2024 disponibles, Pour vérifier vos résultats, veuillez saisir votre numéro de contact ou votre adresse e-mail utilisés lors de votre préinscription.
    </div> 
    

<br>  

<div class="form-container">
    <form method="post" action="{{ route('afficher-resultats') }}">
        @csrf
        <div class="form-group">
            <label for="contact" class="label"> veuillez saisir votre contact ou e-mail  <span class="ast">*</span></label>
            <input type="text" name="searchTerm" id="contact" placeholder="Entrez votre e-mail ou votre contact" required>
        </div>
        <button type="submit" class="print-button">Vérifier son résultat</button>
    </form>
    
    
</div>


@if ($message)
<script>
    document.addEventListener('DOMContentLoaded', function () {
        var message = "{{ $message }}";
        var modal = document.createElement('div');
        modal.classList.add('modal');
        modal.innerHTML = `
            <div class="modal-content">
                <span class="close-button">&times;</span>
                <p>${message}</p>
            </div>
        `;

        document.body.appendChild(modal);

        var closeButton = modal.querySelector('.close-button');
        closeButton.addEventListener('click', function () {
            modal.style.display = 'none';
        });

        modal.style.display = 'block';
    });
</script>

    @endif
                        
</body><!-- This templates was made by Colorlib (https://colorlib.com) -->
</html>