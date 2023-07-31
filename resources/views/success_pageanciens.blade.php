<!DOCTYPE html>
<html>
<head>
    <title>Message de succès</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f7f7f7;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }

        .success-message {
            text-align: center;
            padding: 30px;
            background-color: #dff0d8;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            animation: fadeInUp 0.5s;
        }

        .success-message h1 {
            color: #3c763d;
        }

        .success-message p {
            color: #333;
        }

        .success-message button {
            margin-top: 15px;
            background-color: #007bff;
            color: #fff;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(20px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }
    </style>
</head>
<body>
    <div class="success-message">
        <h1>Merci !</h1>
        <p>Vos données ont été enregistrées avec succès.</p>
        <p> PREINSCRIPTION ANCIEN BACHELIER CPEDEC INPHB|2022-2023.</p>
        <!-- Bouton "Fermer" pour masquer le message -->
        <button onclick="closeSuccessMessage()">Fermer</button>
    </div>

    <script>
        function closeSuccessMessage() {
            var successMessage = document.querySelector('.success-message');
            successMessage.style.display = 'none';
            // Redirection vers la page d'accueil
            window.location.href = 'https://cpdec.inphb.ci/Preinscription';
        }
    
    </script>
</body>
</html>
