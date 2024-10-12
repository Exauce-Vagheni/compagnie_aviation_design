<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CAS Admin - Réservations des Clients</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .navbar {
            background-color: #004d40;
        }
        .btn-primary {
            background-color: #004d40;
            border: none;
        }
        .btn-primary:hover {
            background-color: #00362c;
        }
        .admin-container {
            margin-top: 50px;
        }
        .admin-header {
            color: #004d40;
            text-align: center;
            margin-bottom: 30px;
        }
    </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">CAS Admin</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="admin-reservations.html">Réservations</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="admin-add-destination.html">Ajouter Destination</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="admin-users.html">Utilisateurs</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container admin-container">
        <h2 class="admin-header">Réservations des Clients</h2>
        <div class="table-responsive">
            <table class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Client</th>
                        <th>Ville de Départ</th>
                        <th>Ville d'Arrivée</th>
                        <th>Date de Départ</th>
                        <th>Date de Retour</th>
                        <th>Passagers</th>
                        <th>Statut</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>Jean Dupont</td>
                        <td>Paris</td>
                        <td>New York</td>
                        <td>2024-09-20</td>
                        <td>2024-09-27</td>
                        <td>2</td>
                        <td>En Attente</td>
                        <td>
                            <button class="btn btn-success btn-sm">Confirmer</button>
                            <button class="btn btn-danger btn-sm">Annuler</button>
                        </td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>Marie Dubois</td>
                        <td>Berlin</td>
                        <td>Tokyo</td>
                        <td>2024-10-10</td>
                        <td>2024-10-17</td>
                        <td>1</td>
                        <td>Confirmée</td>
                        <td>
                            <button class="btn btn-danger btn-sm">Annuler</button>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
