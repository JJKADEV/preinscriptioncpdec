<!DOCTYPE html>
<html>
<head>
    <title>Tableau de Bord</title>
    <style>
        /* Styles précédents ... */

        .welcome-message {
            margin-bottom: 20px;
            font-size: 18px;
            text-align: center;
        }
    </style>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }
        header {
            background-color: #333;
            color: white;
            text-align: center;
            padding: 10px;
        }
        .container {
            max-width: 960px;
            margin: 0 auto;
            padding: 20px;
        }
        .button-container {
            display: flex;
            justify-content: space-between;
            margin-bottom: 20px;
        }
        .button {
            background-color: #135492;
            color: white;
            border: none;
            padding: 10px 20px;
            cursor: pointer;
        }
        .button:hover {
            background-color: #0056b3;
        }
        ul {
            list-style: none;
            padding: 0;
        }
        li {
            margin-bottom: 10px;
        }
        h2 {
            font-size: 20px;
            margin-top: 20px;
        }
    </style>
    <style>
        /* Votre style actuel ... */

        .logout-container {
            text-align: center;
            margin-top: 10px;
        }

        .logout-button {
            background-color: #ff3333;
            color: white;
            border: none;
            padding: 10px 20px;
            cursor: pointer;
            text-decoration: none;
        }

        .logout-button:hover {
            background-color: #cc0000;
        }

        /* Nouveau style */
        .bacheliers-list {
            display: none;
            padding: 20px;
            background-color: #f4f4f4;
            border: 1px solid #ddd;
            margin-top: 10px;
        }

        .bacheliers-list.active {
            display: block;
        }

        .bacheliers-list ul {
            padding-left: 20px;
        }

        .bacheliers-list li {
            margin-bottom: 6px;
            display: flex;
            align-items: center;
        }
        .bachelier-table {
    border-collapse: collapse;
    width: 100%;
}

.bachelier-table th {
    background-color: #f2f2f2;
    color: #333;
    padding: 8px;
    text-align: left;
    border: 1px solid #ddd;
}

.bachelier-table td {
    background-color: #fff;
    color: #333;
    padding: 8px;
    border: 1px solid #ddd;
}

.bachelier-table tr:nth-child(even) td {
    background-color: #f9f9f9;
}

.bachelier-table tr:hover td {
    background-color: #f2f2f2;
}

        /*.bacheliers-list li:before {
            content: counter(item) ". ";
            counter-increment: item;
            font-weight: bold;
            margin-right: 10px;
        }*/

        .total-count {
            margin-top: 10px;
            text-align: right;
            font-weight: bold;
        }
    </style>

<style>
    .valider-button, .refuser-button {
        background-color: #4CAF50;
        color: white;
        border: none;
        padding: 10px 20px;
        text-align: center;
        text-decoration: none;
        display: inline-block;
        font-size: 16px;
        transition-duration: 0.4s;
        cursor: pointer;
        border-radius: 4px;
    }

    .valider-button:hover {
        background-color: #45a049;
    }
    .refuser-button:hover {
        background-color: #FF0000;
    }

    .refuser-button {
        background-color: #FF0000; /* Nouvelle couleur rouge */
    }
</style>
</head>
<body>
    <header>
        <h1>Tableau de Bord CPDEC 2023-2024</h1>
        <div class="logout-container">
            <a href="{{ route('login') }}" class="logout-button">Se Déconnecter</a>
        </div>
    </header>
    <div class="container">
    <div class="welcome-message">
            Bienvenue, {{ Auth::user()->name }} !
        </div>
        <div class="button-container">
            <button class="button" id="nouveauxBacheliersButton">Nouveau Bachelier</button>
            <button class="button" id="anciensBacheliersButton">Ancien Bachelier</button>
            <input type="text" id="searchInput" placeholder="Rechercher par nom">
            <button class="button" id="searchButton">Rechercher</button>
        </div>
        <div class="button-container">
            <a href="{{ route('liste-admis') }}" class="button">Liste des admis</a>
            <a href="{{ route('liste-refuses') }}" class="button">Liste des refusés</a>
       </div>

        <div id="nouveauxBacheliersList" class="bacheliers-list">
            <h2>Nouveaux Bacheliers <span> <div class="total-count">{{ count($nouveauxBacheliers) }} nouveau(x) bachelier(s) au total</div></span></h2>
            <ul>
                @foreach($nouveauxBacheliers as $index => $nouveauBachelier)
                <li>
                <table class="bachelier-table">
 <tr>
    <td style="background-color: #135492;"><strong style="color: #fff">Nom et Prénom:</strong></td>
    <td style="background-color: #135492; color: #fff">{{ $nouveauBachelier->nom }} {{ $nouveauBachelier->prenom }}</td>
</tr>
<tr>
    <td><strong>Date de Naissance:</strong></td>
    <td>{{ $nouveauBachelier->dateDeNaissance }}</td>
</tr>
<tr>
    <td><strong>Lieu de Naissance:</strong></td>
    <td>{{ $nouveauBachelier->lieuDeNaissance }}</td>
</tr>
<tr>
    <td><strong>Nationalité:</strong></td>
    <td>{{ $nouveauBachelier->nationalite }}</td>
</tr>
<tr>
    <td><strong>Établissement d'Origine:</strong></td>
    <td>{{ $nouveauBachelier->etablissementDorigine }}</td>
</tr>
<tr>
    <td><strong>Contact:</strong></td>
    <td>{{ $nouveauBachelier->contact }}</td>
</tr>
<tr>
    <td><strong>Email:</strong></td>
    <td>{{ $nouveauBachelier->email }}</td>
</tr>
<tr>
    <td><strong>Nom du Parent:</strong></td>
    <td>{{ $nouveauBachelier->nomDuParent }}</td>
</tr>
<tr>
    <td><strong>Prénom du Parent:</strong></td>
    <td>{{ $nouveauBachelier->prenomDuParent }}</td>
</tr>
<tr>
    <td><strong>Contact du Parent:</strong></td>
    <td>{{ $nouveauBachelier->contactDuParent }}</td>
</tr>
<tr>
    <td><strong>Email du Parent:</strong></td>
    <td>{{ $nouveauBachelier->emailDuParent }}</td>
</tr>
<tr>
    <td><strong>Adresse du Parent:</strong></td>
    <td>{{ $nouveauBachelier->adresseDuParent }}</td>
</tr>
<tr>
    <td><strong>UE:</strong></td>
    <td>{{ $nouveauBachelier->ue }}</td>
</tr>
<tr>
    <td><strong>Fichiers:</strong></td>
    <td>{{ $nouveauBachelier->fichiers }}</td>
</tr>
<tr>
    <td><strong>État:</strong></td>
    <td>{{ $nouveauBachelier->etat }}</td>
</tr>
<tr>
    <td><strong>Série:</strong></td>
    <td>{{ $nouveauBachelier->serie }}</td>
</tr>
<tr>
    <td><strong>Moyenne Annuelle Français:</strong></td>
    <td>{{ $nouveauBachelier->moyenneAnnuelleFrancais }}</td>
</tr>
<tr>
    <td><strong>Moyenne Annuelle Anglais:</strong></td>
    <td>{{ $nouveauBachelier->moyenneAnnuelleAnglais }}</td>
</tr>
<tr>
    <td><strong>Moyenne Annuelle Math:</strong></td>
    <td>{{ $nouveauBachelier->moyenneAnnuelleMath }}</td>
</tr>
<tr>
    <td><strong>Note Bac Français:</strong></td>
    <td>{{ $nouveauBachelier->noteBacFrancais }}</td>
</tr>
<tr>
    <td><strong>Note Bac Anglais:</strong></td>
    <td>{{ $nouveauBachelier->noteBacAnglais }}</td>
</tr>
<tr>
    <td><strong>Note Bac Math:</strong></td>
    <td>{{ $nouveauBachelier->noteBacMath }}</td>
</tr>
<tr>
    <td><strong>Moyenne Générale Annuelle:</strong></td>
    <td>{{ $nouveauBachelier->moyenneGeneraleAnnuelle }}</td>
</tr>
<tr>
    <td><strong>Total Points Bac:</strong></td>
    <td>{{ $nouveauBachelier->totalPointBac }}</td>
</tr>
<tr>
    <td><strong>Moyenne Bac:</strong></td>
    <td>{{ $nouveauBachelier->moyenneBac }}</td>
</tr>
<tr>
    <td style="background-color: #00A896;"><strong>Moyenne d'admission:</strong></td>
    <td style="background-color: #00A896;">{{ $nouveauBachelier->moyenneAdmission }}</td>
</tr>
<tr>
    <td><strong>STATUT :</strong></td>
    <form action="{{ route('nouveaux-bacheliers.update-status', ['id' => $nouveauBachelier->id]) }}" method="POST">
    @csrf
    <td>
        <button class="valider-button" type="submit" name="valider">Valider</button>
        <button class="refuser-button" type="submit" name="refuser">Refuser</button>
    </td>
    </form>    
</tr>
<tr>
    <td><strong>STATUT DE L'ETUDIANT </strong></td>
    <td><strong>{{ $nouveauBachelier->status }}</strong></td>
</tr>

            </table>
</li>
                @endforeach
            </ul>
            
        </div>

        <div id="anciensBacheliersList" class="bacheliers-list">
            <h2>Anciens Bacheliers <span><div class="total-count">{{ count($anciensBacheliers) }} ancien(s) bachelier(s) au total</div></span></h2>
            <ul>
                @foreach($anciensBacheliers as $index => $ancienBachelier)
                <li>
  <table class="bachelier-table">
                <tr>
    <td style="background-color: #135492;"><strong style="color: #fff">Nom et Prénom:</strong></td>
    <td style="background-color: #135492; color: #fff">{{ $ancienBachelier->nom }} {{ $ancienBachelier->prenom }}</td>
</tr>
<tr>
    <td><strong>Date de Naissance:</strong></td>
    <td>{{ $ancienBachelier->dateDeNaissance }}</td>
</tr>
<tr>
    <td><strong>Lieu de Naissance:</strong></td>
    <td>{{ $ancienBachelier->lieuDeNaissance }}</td>
</tr>
<tr>
    <td><strong>Nationalité:</strong></td>
    <td>{{ $ancienBachelier->nationalite }}</td>
</tr>
<tr>
    <td><strong>Établissement d'Origine:</strong></td>
    <td>{{ $ancienBachelier->etablissementDorigine }}</td>
</tr>
<tr>
    <td><strong>Contact:</strong></td>
    <td>{{ $ancienBachelier->contact }}</td>
</tr>
<tr>
    <td><strong>Email:</strong></td>
    <td>{{ $ancienBachelier->email }}</td>
</tr>
<tr>
    <td><strong>Nom du Parent:</strong></td>
    <td>{{ $ancienBachelier->nomDuParent }}</td>
</tr>
<tr>
    <td><strong>Prénom du Parent:</strong></td>
    <td>{{ $ancienBachelier->prenomDuParent }}</td>
</tr>
<tr>
    <td><strong>Contact du Parent:</strong></td>
    <td>{{ $ancienBachelier->contactDuParent }}</td>
</tr>
<tr>
    <td><strong>Email du Parent:</strong></td>
    <td>{{ $ancienBachelier->emailDuParent }}</td>
</tr>
<tr>
    <td><strong>Adresse du Parent:</strong></td>
    <td>{{ $ancienBachelier->adresseDuParent }}</td>
</tr>
<tr>
    <td><strong>UE:</strong></td>
    <td>{{ $ancienBachelier->ue }}</td>
</tr>
<tr>
    <td><strong>Fichiers:</strong></td>
    <td>{{ $ancienBachelier->fichiers }}</td>
</tr>
<tr>
    <td><strong>État:</strong></td>
    <td>{{ $ancienBachelier->etat }}</td>
</tr>
<tr>
    <td><strong>Diplôme:</strong></td>
    <td>{{ $ancienBachelier->diplome }}</td>
</tr>
<tr>
    <td><strong>Année du Diplôme:</strong></td>
    <td>{{ $ancienBachelier->anneeDuDiplome }}</td>
</tr>
<tr>
    <td><strong>Profession:</strong></td>
    <td>{{ $ancienBachelier->profession }}</td>
</tr>
<tr>
    <td><strong>VES:</strong></td>
    <td>{{ $ancienBachelier->ves }}</td>
</tr>
<tr>
    <td><strong>Cours:</strong></td>
    <td>{{ $ancienBachelier->cours }}</td>
</tr>

</table>
            </li>
                @endforeach
            </ul>
            
        </div>
    </div>
    <script>
        const nouveauxBacheliersButton = document.getElementById('nouveauxBacheliersButton');
        const anciensBacheliersButton = document.getElementById('anciensBacheliersButton');
        const nouveauxBacheliersList = document.getElementById('nouveauxBacheliersList');
        const anciensBacheliersList = document.getElementById('anciensBacheliersList');

        nouveauxBacheliersButton.addEventListener('click', () => {
            nouveauxBacheliersList.classList.add('active');
            anciensBacheliersList.classList.remove('active');
        });

        anciensBacheliersButton.addEventListener('click', () => {
            anciensBacheliersList.classList.add('active');
            nouveauxBacheliersList.classList.remove('active');
        });
    </script>
     <script>
    document.getElementById('searchButton').addEventListener('click', function() {
        var searchValue = document.getElementById('searchInput').value.toLowerCase();
        var bacheliers = document.querySelectorAll('.bacheliers-list li');

        bacheliers.forEach(function(bachelier) {
            var nom = bachelier.querySelector('.bachelier-table td:nth-child(2)').textContent.toLowerCase();
            if (nom.includes(searchValue)) {
                bachelier.style.display = 'block';
            } else {
                bachelier.style.display = 'none';
            }
        });
    });
</script>

        
</body>
</html>
