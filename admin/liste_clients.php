<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CAS Admin - Utilisateurs</title>
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
         .nav-item a{
            color:white;
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
                        <a class="nav-link" href="reservations_clients.php">Réservations</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="ajout_destination.php">Ajouter destination</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="liste_clients.php">Utilisateurs</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Se deconnecter</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container admin-container">
        <h2 class="admin-header">Liste des utilisateurs</h2>
        <div class="table-responsive">
            <table class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Nom</th>
                        <th>Email</th>
                        <th>Rôle</th>
                        <th>Date d'inscription</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>Aris Tonton</td>
                        <td>Aris@gmail.com</td>
                        <td>Client</td>
                        <td>2024-08-01</td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>Reddy</td>
                        <td>Reddy@gmail.com</td>
                        <td>Client</td>
                        <td>2024-08-05</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
