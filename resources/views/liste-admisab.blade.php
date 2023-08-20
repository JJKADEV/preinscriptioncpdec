<!DOCTYPE html>
<html>
<head>
    <title>Liste des admis</title>
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
    <style>
    /* Style pour le bouton d'exportation */
    .button {
        display: inline-block;
        background-color: #007bff;
        color: white;
        padding: 10px 20px;
        border: none;
        border-radius: 4px;
        cursor: pointer;
        transition: background-color 0.3s ease-in-out;
    }

    .button:hover {
        background-color: #0056b3;
    }

    /* Pour assurer la responsivité */
    @media (max-width: 768px) {
        .button {
            display: block;
            width: 100%;
            margin-bottom: 10px;
        }
    }
</style>

</head>
<body>
    <div class="container">
        <h1>Liste des étudiants admis</h1>
        <br>
        <a id="exportButton" class="button">Exporter au format CSV</a>

        <table>
            <tr>
                <th>Nom et Prénom</th>
                <th>Date de Naissance</th>
                <th>Lieu de Naissance</th>
                <th>Nationalité</th>
                <th>Numéro de téléphone</th>
                <th>Email</th>
                <th>Moyenne d'Admission</th>
                <!-- Ajoutez ici d'autres colonnes si nécessaire -->
            </tr>
            @foreach($etudiantsAdmis as $etudiant)
            <tr>
                <td>{{ $etudiant->nom }} {{ $etudiant->prenom }}</td>
                <td>{{ $etudiant->dateDeNaissance }}</td>
                <td>{{ $etudiant->lieuDeNaissance }}</td>
                <td>{{ $etudiant->nationalite }}</td>
                <td>{{ $etudiant->contact }}</td>
                <td>{{ $etudiant->email }}</td>
                <td>{{ $etudiant->moyenneAdmission }}</td>
                
                <!-- Ajoutez ici d'autres colonnes si nécessaire -->
            </tr>
            @endforeach
        </table>
    </div>

    <script>
    function exportToCSV(data, filename) {
        const csvContent = "data:text/csv;charset=utf-8," + data.map(e => e.join(";")).join("\r\n");
        const encodedUri = encodeURI(csvContent);
        const link = document.createElement("a");
        link.setAttribute("href", encodedUri);
        link.setAttribute("download", filename);
        document.body.appendChild(link);
        link.click();
        document.body.removeChild(link);
    }

    const exportButton = document.getElementById('exportButton');
    exportButton.addEventListener('click', () => {
        const table = document.querySelector('table');
        const rows = table.querySelectorAll('tr');
        const data = [];

        rows.forEach(row => {
            const rowData = [];
            row.querySelectorAll('th, td').forEach(cell => {
                rowData.push(cell.textContent);
            });
            data.push(rowData);
        });

        exportToCSV(data, 'etudiants_admis.csv');
    });
</script>

</body>
</html>