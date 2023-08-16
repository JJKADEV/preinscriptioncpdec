<!DOCTYPE html>
<html>
<head>
    <title>Liste des refusés</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f2f2f2;
            margin: 0;
            padding: 0;
        }
        .container {
            max-width: 960px;
            margin: 0 auto;
            padding: 20px;
        }
        h1 {
            color: #333;
            text-align: center;
            margin-bottom: 20px;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            background-color: #fff;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        th, td {
            padding: 10px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }
        th {
            background-color: #f2f2f2;
            color: #333;
        }
        tr:hover {
            background-color: #f9f9f9;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Liste des étudiants refusés</h1>
        <table>
            <tr>
                <th>Nom et Prénom</th>
                <th>Date de Naissance</th>
                <th>Lieu de Naissance</th>
                <th>Nationalité</th>
                <th>Numéro de téléphone</th>
                <th>Email</th>
                <!-- Ajoutez ici d'autres colonnes si nécessaire -->
            </tr>
            @foreach($etudiantsRefuses as $etudiant)
            <tr>
                <td>{{ $etudiant->nom }} {{ $etudiant->prenom }}</td>
                <td>{{ $etudiant->dateDeNaissance }}</td>
                <td>{{ $etudiant->lieuDeNaissance }}</td>
                <td>{{ $etudiant->nationalite }}</td>
                <td>{{ $etudiant->contact }}</td>
                <td>{{ $etudiant->email }}</td>
                <!-- Ajoutez ici d'autres colonnes si nécessaire -->
            </tr>
            @endforeach
        </table>
    </div>
</body>
</html>